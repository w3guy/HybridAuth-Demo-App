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
    array(
        "base_url"   => "http://slim.local/hybrid.php",
        "providers"  => array(
            "Google"   => array(
                "enabled" => true,
                "keys"    => array( "id" => "", "secret" => "" ),
            ),
            "Facebook" => array(
                "enabled"        => true,
                "keys"           => array( "id" => "", "secret" => "" ),
                "trustForwarded" => false
            ),
            "Twitter"  => array(
                "enabled" => true,
                "keys"    => array( "key" => "", "secret" => "" )
            ),
            "LinkedIn" => array(
                "enabled" => true,
                "keys"    => array( "key" => "", "secret" => "" )
            ),
            "Github"   => array(
                "enabled" => true,
                "keys"    => array(
                    "id"     => "7fc2a3116c86b9dac673",
                    "secret" => "1a3a1ba0c158a3e0cd1538b4f3c36fd6e6c10556"
                ),
                "wrapper" => array( "path" => "providers/GitHub.php", "class" => "Hybrid_Providers_GitHub" )
            ),
        ),
        // If you want to enable logging, set 'debug_mode' to true.
        // You can also set it to
        // - "error" To log only error messages. Useful in production
        // - "info" To log info and error messages (ignore debug messages)
        "debug_mode" => true,
        // Path to file writable by the web server. Required if 'debug_mode' is not false
        "debug_file" => "bug.txt",
    );
