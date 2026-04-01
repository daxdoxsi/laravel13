<?php

namespace App\Concerns;

use App\Models\Bookmark;
use Illuminate\Validation\Rule;

trait BookmarkValidationRules
{
    /**
     * Get the validation rules used to validate user profiles.
     *
     * @return array<string, array<int, \Illuminate\Contracts\Validation\Rule|array<mixed>|string>>
     */
    protected function bookmarkRules(?int $userId = null): array
    {
        return [
            'name' => $this->nameRules(),
            'url' => $this->urlRules(),
        ];
    }

    /**
     * Get the validation rules used to validate bookmark names.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array<mixed>|string>
     */
    protected function nameRules(): array
    {
        return ['required', 'string', 'max:255'];
    }

    /**
     * Get the validation rules used to validate bookmark url.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array<mixed>|string>
     */
    protected function urlRules(?int $userId = null): array
    {
        return [
            'required',
            'string',
            'url',
            'max:255',
        ];
    }
}
