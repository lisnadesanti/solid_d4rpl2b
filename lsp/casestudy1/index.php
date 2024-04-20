<?php

// Interface for chatting
interface Chat {
    public function chat(): void;
}

// Interface for sending photos and videos
interface MediaSender {
    public function sendPhotosAndVideos(): void;
}

// Interface for calling group videos
interface VideoCaller {
    public function callGroupVideo(): void;
}

// Interface for publishing posts
interface PostPublisher {
    public function publishPost(): void;
}

// Class representing WhatsApp functionality
class WhatsApp implements Chat, MediaSender, VideoCaller {
    public function chat(): void {
        // Implementation for chatting on WhatsApp
        echo "Chatting on WhatsApp...\n";
    }

    public function sendPhotosAndVideos(): void {
        // Implementation for sending photos and videos on WhatsApp
        echo "Sending photos and videos on WhatsApp...\n";
    }

    public function callGroupVideo(): void {
        // Implementation for calling group video on WhatsApp
        echo "Calling group video on WhatsApp...\n";
    }
}

// Class representing Instagram functionality
class Instagram implements Chat, MediaSender, PostPublisher {
    public function chat(): void {
        // Implementation for chatting on Instagram
        echo "Chatting on Instagram...\n";
    }

    public function sendPhotosAndVideos(): void {
        // Implementation for sending photos and videos on Instagram
        echo "Sending photos and videos on Instagram...\n";
    }

    public function publishPost(): void {
        // Implementation for publishing posts on Instagram
        echo "Publishing post on Instagram...\n";
    }
}

// Example usage:
$whatsapp = new WhatsApp();
$whatsapp->chat();
$whatsapp->sendPhotosAndVideos();
$whatsapp->callGroupVideo();

$instagram = new Instagram();
$instagram->chat();
$instagram->sendPhotosAndVideos();
$instagram->publishPost();
?>