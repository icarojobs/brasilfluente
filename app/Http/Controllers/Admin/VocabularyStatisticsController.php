<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TestRequest as StoreRequest;
use App\Http\Requests\TestRequest as UpdateRequest;

/**
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class VocabularyStatisticsController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\VocabularyStatistics');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/vocabularystatistics');
        $this->crud->setEntityNameStrings('estatística do vocabulário', 'estatísticas dos vocabulários');

        /*
        |--------------------------------------------------------------------------
        | CRUD COLUMNS
        |--------------------------------------------------------------------------
        */
        $this->crud->setFromDb();

        /*
        |--------------------------------------------------------------------------
        | CRUD FIELDS
        |--------------------------------------------------------------------------
        */


        // add asterisk for fields that are required in TestRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
