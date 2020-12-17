<?php

namespace App\Traits;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;


trait ApiResponser
{
	private function successResponse($data, $code)
	{
		return response()->json($data, $code);
	}

	protected function errorResponse($message, $code)
	{
		return response()->json(['error' => $message, 'code' => $code], $code);
	}

	protected function showOne(Model $instance, $code = 200)
	{
		return $this->successResponse(['data' => $instance], $code);
	}

	protected function showAll(Collection $collection, $code = 200)
	{
		//$collection = $this->filterData($collection);
		//$collection = $this->paginate($collection);
		return $this->successResponse(['data' => $collection], $code);
	}

	protected function filterData(Collection $collection)
	{
		foreach (request()->query() as $query => $value) {
			$attribute = $query;

			if (isset($attribute, $value)) {
				$collection = $collection->where($attribute, $value);
			}
		}
		
		// $data = [];

		// foreach ($collection as $item) {
		// 	array_push($data, $item);
		// }

		return $data;

	}

	protected function paginate(Collection $collection)
	{
		$page = LengthAwarePaginator::resolvaCurrentPage();

		$perPage = 10;

		$results = $collection->slice( ($page-1) * $perPage, $perPage )->values();

		$paginated = new LengthAwarePaginator($results, $collection->count(), $perPage,[
			'path' => LengthAwarePaginator::resolveCurrentPath(),
		]);

		$paginated->appends(request()->all());

		return $paginated;
	}
	
	
}