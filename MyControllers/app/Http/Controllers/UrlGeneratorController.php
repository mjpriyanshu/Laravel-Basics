<?php

namespace App\Http\Controllers;

class UrlGeneratorController extends Controller
{
    public function urlGenerator()
    {
        // Generate a framework URL.
        return 'Framework URL: ' . url('/dashboard');
    }

    public function currentUrl()
    {
        // Show the current page URL.
        return 'Current URL: ' . request()->url();
    }

    public function fullCurrentUrl()
    {
        // Show the current URL with query string.
        return 'Full Current URL: ' . request()->fullUrl();
    }

    public function assetUrl()
    {
        // Generate a URL for a public asset.
        return 'Asset URL: ' . asset('images/logo.png');
    }

    public function generationShortcuts()
    {
        // Shortcuts for common URL generation tasks.
        $resourceUrl = route('resource.index');
        $assetUrl = asset('images/logo.png');
        $frameworkUrl = url('/dashboard');

        return response(
            "Route URL: {$resourceUrl}\nAsset URL: {$assetUrl}\nFramework URL: {$frameworkUrl}", 
            200
        )->header('Content-Type', 'text/plain');
    }
}