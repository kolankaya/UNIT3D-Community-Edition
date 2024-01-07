<?php
/**
 * NOTICE OF LICENSE.
 *
 * UNIT3D Community Edition is open-sourced software licensed under the GNU Affero General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D Community Edition
 *
 * @author     HDVinnie <hdinnovations@protonmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 */

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wish;

/** @extends Factory<Wish> */
class WishFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Wish::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title'   => $this->faker->sentence(),
            'tmdb'    => $this->faker->word(),
            'type'    => $this->faker->word(),
            'source'  => $this->faker->word(),
        ];
    }
}
