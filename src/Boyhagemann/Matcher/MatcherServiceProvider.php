<?php namespace Boyhagemann\Matcher;

use Illuminate\Support\ServiceProvider;

class MatcherServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

//		$matcher = $this->app->make('Boyhagemann\Matcher\Container');
//		$matcher->defaults(array(
//			'foo' 		=> 'bar',
//			'page_id' 	=> function($object) {
//				return $object->id;
//			}
//		));
//		$matcher->whenProperty('title')->startsWith('test')->provide(array('test'));
//		$matcher->whenProperty('title')->endsWith('test')->provide(array('test2'));
//		$matcher->whenProperty('title')->equals('test')->provide(array('test3'));
//		$matcher->whenProperty('title')->contains('te')->provide(array('test4'))->tag('ha2');


//		$config = array(
//			'defaults' => array(
//				'foo' => 'bar',
//				'page_id' => function($object) {
//						return $object->id;
//					},
//			),
//			'tags' => array('ha2'),
//			'match' => array(
//				array(
//					'property' => 'title',
//					'contains' => array('te2', 't'),
//					'provide' => array('blaaat' => 'testests'),
//					'tags' => array('ha2'),
//				)
//			)
//		);
//		$matcher = $this->app['Boyhagemann\Matcher\Container']->fromArray($config);
//
//		$page = new \Boyhagemann\Pages\Model\Page;
//		$page->id = 23;
//		$page->title = 'test';
//
//
//		dd($matcher->match($page, 'ha2'));
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}