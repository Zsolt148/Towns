<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePopulationRequest;
use App\Http\Requests\UpdatePopulationRequest;
use App\Models\Town;
use App\Repositories\PopulationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PopulationController extends AppBaseController
{
    /** @var PopulationRepository $populationRepository*/
    private $populationRepository;

    public function __construct(PopulationRepository $populationRepo)
    {
        $this->populationRepository = $populationRepo;
    }

    /**
     * Display a listing of the Population.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $populations = $this->populationRepository->allQuery()->with('town')->get();

        return view('populations.index')
            ->with('populations', $populations);
    }

    /**
     * Show the form for creating a new Population.
     *
     * @return Response
     */
    public function create()
    {
        $towns = Town::all('id', 'name')->mapWithKeys(function ($item) {
            return [$item->id => $item->name];
        });

        return view('populations.create')
            ->with('towns', $towns);
    }

    /**
     * Store a newly created Population in storage.
     *
     * @param CreatePopulationRequest $request
     *
     * @return Response
     */
    public function store(CreatePopulationRequest $request)
    {
        $input = $request->all();

        $population = $this->populationRepository->create($input);

        Flash::success('Population saved successfully.');

        return redirect(route('admin:populations.index'));
    }

    /**
     * Display the specified Population.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $population = $this->populationRepository->find($id);

        if (empty($population)) {
            Flash::error('Population not found');

            return redirect(route('admin:populations.index'));
        }

        return view('populations.show')->with('population', $population);
    }

    /**
     * Show the form for editing the specified Population.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $population = $this->populationRepository->find($id);

        if (empty($population)) {
            Flash::error('Population not found');

            return redirect(route('admin:populations.index'));
        }

        $towns = Town::all('id', 'name')->mapWithKeys(function ($item) {
            return [$item->id => $item->name];
        });

        return view('populations.edit')
            ->with('population', $population)
            ->with('towns', $towns);
    }

    /**
     * Update the specified Population in storage.
     *
     * @param int $id
     * @param UpdatePopulationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePopulationRequest $request)
    {
        $population = $this->populationRepository->find($id);

        if (empty($population)) {
            Flash::error('Population not found');

            return redirect(route('admin:populations.index'));
        }

        $population = $this->populationRepository->update($request->all(), $id);

        Flash::success('Population updated successfully.');

        return redirect(route('admin:populations.index'));
    }

    /**
     * Remove the specified Population from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $population = $this->populationRepository->find($id);

        if (empty($population)) {
            Flash::error('Population not found');

            return redirect(route('admin:populations.index'));
        }

        $this->populationRepository->delete($id);

        Flash::success('Population deleted successfully.');

        return redirect(route('admin:populations.index'));
    }
}
