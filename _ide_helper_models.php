<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\User
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\lapor> $lapor
 * @property-read int|null $lapor_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\post> $posts
 * @property-read int|null $posts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\category
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\post> $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|category query()
 */
	class category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\data_poktan
 *
 * @method static \Illuminate\Database\Eloquent\Builder|data_poktan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|data_poktan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|data_poktan query()
 */
	class data_poktan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\lapor
 *
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\laporFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|lapor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|lapor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|lapor query()
 */
	class lapor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\post
 *
 * @property-read \App\Models\category|null $category
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\postFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|post filter(array $filters)
 * @method static \Illuminate\Database\Eloquent\Builder|post findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|post query()
 * @method static \Illuminate\Database\Eloquent\Builder|post withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class post extends \Eloquent {}
}

