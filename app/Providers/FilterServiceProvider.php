<?php namespace Laracasts\Providers;

use Illuminate\Routing\FilterServiceProvider as ServiceProvider;

class FilterServiceProvider extends ServiceProvider {

	/**
	 * The filters that should run before all requests.
	 *
	 * @var array
	 */
	protected $before = [
		'Laracasts\Http\Filters\MaintenanceFilter',
	];

	/**
	 * The filters that should run after all requests.
	 *
	 * @var array
	 */
	protected $after = [
		//
	];

	/**
	 * All available route filters.
	 *
	 * @var array
	 */
	protected $filters = [
		'auth' => 'Laracasts\Http\Filters\AuthFilter',
		'auth.basic' => 'Laracasts\Http\Filters\BasicAuthFilter',
		'csrf' => 'Laracasts\Http\Filters\CsrfFilter',
		'guest' => 'Laracasts\Http\Filters\GuestFilter',
	];

}