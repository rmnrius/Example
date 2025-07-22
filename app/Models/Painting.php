<?php

namespace App\Models;
use Illuminate\Support\Arr;


class Painting {
    public static function all(): array {
        return [
            ['id' => 1, 'title' => 'Starry Night', 'artist' => 'Vincent van Gogh'],
            ['id' => 2, 'title' => 'Mona Lisa', 'artist' => 'Leonardo da Vinci'],
            ['id' => 3, 'title' => 'The Scream', 'artist' => 'Edvard Munch'],
        ];
    }

    public static function find(int $id): array {
        $painting = Arr::first(Painting::all(), fn($painting) => $painting['id'] === $id);
        
        if (!$painting) {
            abort(404, 'Painting not found');
        }
        return $painting;
    }
}