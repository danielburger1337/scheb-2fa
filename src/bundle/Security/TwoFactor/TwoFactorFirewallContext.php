<?php

declare(strict_types=1);

namespace Scheb\TwoFactorBundle\Security\TwoFactor;

/**
 * @final
 */
class TwoFactorFirewallContext
{
    public function __construct(private array $firewallConfigs)
    {
    }

    public function getFirewallConfig(string $firewallName): TwoFactorFirewallConfig
    {
        if (!isset($this->firewallConfigs[$firewallName])) {
            throw new \InvalidArgumentException(sprintf('Firewall "%s" has no two-factor config.', $firewallName));
        }

        return $this->firewallConfigs[$firewallName];
    }
}
