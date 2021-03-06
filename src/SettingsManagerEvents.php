<?php

declare(strict_types=1);

namespace Helis\SettingsManagerBundle;

final class SettingsManagerEvents
{
    /**
     * Provides an ability to modify or extend menu.
     *
     * Event class \Helis\SettingsManagerBundle\Event\ConfigureMenuEvent
     */
    public const CONFIGURE_MENU = 'settings_manager.configure_menu';

    /**
     * Provides an ability to modify setting just before fetch.
     *
     * Event class \Helis\SettingsManagerBundle\Event\GetSettingEvent
     */
    public const GET_SETTING = 'settings_manager.get_setting';

    private function __construct()
    {
    }
}
