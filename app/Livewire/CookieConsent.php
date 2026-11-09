<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class CookieConsent extends Component
{
    private const COOKIE_NAME = 'portfolio_external_fonts';

    private const COOKIE_LIFETIME = 60 * 24 * 180; // 180 days

    public bool $showBanner = true;

    public bool $showPreferences = false;

    public bool $hasSavedPreferences = false;

    public bool $externalFonts = false;

    public function mount(): void
    {
        $this->loadSavedPreferences();
    }

    private function loadSavedPreferences(): void
    {
        $saved = request()->cookie(self::COOKIE_NAME);

        $this->hasSavedPreferences = in_array(
            $saved,
            ['0', '1'],
            true
        );

        $this->externalFonts = $saved === '1';

        $this->showBanner = ! $this->hasSavedPreferences;
    }

    public function enableGoogleFonts(): void
    {
        $this->externalFonts = true;

        $this->savePreferences();
    }

    public function useSystemFonts(): void
    {
        $this->externalFonts = false;

        $this->savePreferences();
    }

    public function savePreferences(): void
    {
        cookie()->queue(
            cookie(
                self::COOKIE_NAME,
                $this->externalFonts ? '1' : '0',
                self::COOKIE_LIFETIME,
                '/',
                null,
                config('session.secure') ?? request()->isSecure(),
                true,
                false,
                'lax'
            )
        );

        $this->hasSavedPreferences = true;
        $this->showBanner = false;
        $this->showPreferences = false;

        $this->dispatch(
            'external-fonts-updated',
            enabled: $this->externalFonts
        );
    }

    public function openPreferences(): void
    {
        $this->externalFonts = request()->cookie(self::COOKIE_NAME) === '1';

        $this->showBanner = false;
        $this->showPreferences = true;
    }

    public function closePreferences(): void
    {
        $this->showPreferences = false;
        $this->showBanner = ! $this->hasSavedPreferences;
    }

    #[On('open-cookie-preferences-window')]
    public function openPreferencesFromEvent(): void
    {
        $this->openPreferences();
    }

    public function render()
    {
        return view('livewire.cookie-consent');
    }
}
