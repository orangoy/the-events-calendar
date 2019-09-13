<?php

namespace Tribe\Events\Views\V2\Partials\Month_View\Nav;

use Tribe\Test\Products\WPBrowser\Views\V2\HtmlPartialTestCase;

class NextTest extends HtmlPartialTestCase
{

	protected $partial_path = 'month/nav/next';

	/**
	 * Test render with label and link
	 */
	public function test_render_with_label_and_link() {
		$this->assertMatchesSnapshot( $this->get_partial_html( [
			'label' => 'May',
			'link'  => '#',
		] ) );
	}
}
