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

        $input      = \App\Models\FormElement::whereElement('input')->firstOrFail();
        $input_type = \App\Models\FormElementAttribute::whereFormElementId($input->id)->whereAttribute('type')->firstOrFail();

        $weightJot = \App\Models\Jot::withoutGlobalScopes()->whereUserId($user->id)->whereSlug('weight')->firstOrFail();

        $input->jots()->attach($weightJot, ['title' => 'Weight', 'description' => 'Weight in lbs', 'order_column' => 1]);
        $input->jots()->attach($weightJot, ['title' => 'Date', 'description' => 'Recorded date of weight', 'order_column' => 2]);

        $weight_number = \App\Models\FormElementJot::whereTitle('Weight')->firstOrFail();
        $weight_date   = \App\Models\FormElementJot::whereTitle('Date')->firstOrFail();

        $input_type->formElementJots()->attach($weight_number, ['value' => 'number']);
        $input_type->formElementJots()->attach($weight_date, ['value' => 'date']);
    }
}
