<?php

namespace App\Controllers;

class Auth extends BaseController
{
    // Create logout function
    public function logout()
    {
        // Destroy session
        session()->destroy();

        // Remove session cookie
        $params = session_get_cookie_params();
        setcookie(
            session_name(),      // Session name
            '',                  // Empty value
            time() - 3600,       // Expire in the past
            $params['path'] ?? '/',
            $params['domain'] ?? '',
            isset($_SERVER['HTTPS']),
            true
        );

        // Redirect to homepage after logout
        return redirect()->to('/');
    }
}
