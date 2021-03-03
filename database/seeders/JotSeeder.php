<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::findOrFail(1);

        $weightJot = new \App\Models\Jot([
            'title'        => 'Weight Tracker',
            'description'  => 'Daily weight entries',
            'slug'         => 'weight',
            'order_column' => 1,
        ]);

        $user->jots()->save($weightJot);
        $user->refresh();

        $input  = \App\Models\FormElement::whereElement('input')->firstOrFail();
        $number = \App\Models\FormElementType::whereFormElementId($input->id)->whereType('number')->firstOrFail();
        $date   = \App\Models\FormElementType::whereFormElementId($input->id)->whereType('date')->firstOrFail();

        $weightJot = \App\Models\Jot::withoutGlobalScopes()->whereUserId($user->id)->whereSlug('weight')->firstOrFail();
        $weightJot->formElementTypes()->attach($number, ['title' => 'Weight', 'description' => 'Weight in lbs', 'order_column' => 1]);
        $weightJot->formElementTypes()->attach($date, ['title' => 'Date', 'description' => 'Recorded date of weight', 'order_column' => 2]);
    }
}
