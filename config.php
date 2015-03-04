<?php
/**
 * HybridAuth
 * http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
 * (c) 2009-2014, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
 */

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return
    [
        "base_url"   => "http://slim.local/hybrid.php",
        "providers"  => [
            "Google"   => [
                "enabled" => true,
                "keys"    => [ "id" => "", "secret" => "" ],
            ],
            "Facebook" => [
                "enabled"        => true,
                "keys"           => [ "id" => "", "secret" => "" ],
                "trustForwarded" => false
            ],
            "Twitter"  => [
                "enabled" => true,
                "keys"    => [ "key" => "", "secret" => "" ]
            ],
            "LinkedIn" => [
                "enabled" => true,
                "keys"    => [ "key" => "", "secret" => "" ]
            ],
            "Github"   => array(
                "enabled" => true,
                "keys"    => array(
                    "id"     => "7fc2a3116c86b9dac673",
                    "secret" => "1a3a1ba0c158a3e0cd1538b4f3c36fd6e6c10556"
                ),
                "wrapper" => [ "path" => "providers/GitHub.php", "class" => "Hybrid_Providers_GitHub" ]
            ),
        ],
        // If you want to enable logging, set 'debug_mode' to true.
        // You can also set it to
        // - "error" To log only error messages. Useful in production
        // - "info" To log info and error messages (ignore debug messages)
        "debug_mode" => true,
        // Path to file writable by the web server. Required if 'debug_mode' is not false
        "debug_file" => "bug.txt",
    ];
