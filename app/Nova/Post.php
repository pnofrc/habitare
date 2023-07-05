<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Number;


class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Post>
     */
    public static $model = \App\Models\Post::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Titolo')
            ->sortable()
            ->rules('required', 'max:255'),


            Text::make('coordinate')->hideFromIndex(),



            Trix::make('Testo')->withFiles('public'),

            Select::make('Calendario')->options([
                'zero' => ['label' => '14 Luglio', 'group' => 'Benvenuti - Tredozio'],
                'uno' => ['label' => '15 Luglio', 'group' => 'Primo Weekend - Rocca'],
                'due' => ['label' => '16 Luglio', 'group' => 'Primo Weekend - Rocca'],
                'tre' => ['label' => '22 Luglio', 'group' => 'Secondo Weekend - Tredozio'],
                'quattro' => ['label' => '23 Luglio', 'group' => 'Secondo Weekend - Tredozio'],
                'cinque' => ['label' => '29 Luglio', 'group' => 'Terzo Weekend - Portico San Benedetto'],
                'sei' => ['label' => '30 Luglio', 'group' => 'Terzo Weekend - Portico San Benedetto'],
            ])->displayUsingLabels(),

            Select::make('Quando')->options([
                'Tutto' => 'Tutto il giorno',
                'Mattino' => 'Mattino',
                'Pomeriggio' => 'Pomeriggio',
                'Sera' => 'Sera',
            ])->displayUsingLabels(),

            Number::make('Orario')->min(0)->max(24)->step(0.01)->nullable(),
            Number::make('Orario_fine')->min(0)->max(24)->step(0.01),

            BelongsToMany::make('Categoria', 'categories', Categories::class)->display('title'),


            Hidden::make('made_by', 'made_by')->default(function ($request) {
                return $request->user()->id;
            }),



        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
