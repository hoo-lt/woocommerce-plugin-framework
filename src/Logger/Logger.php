<?php

namespace Hoo\WoocommercePluginFramework\Logger;

use Hoo\WordpressPluginFramework\Logger\LoggerInterface;
use WC_Logger_Interface;

class Logger implements LoggerInterface
{
	public function __construct(
		protected readonly WC_Logger_Interface $wcLogger,
		protected readonly string $source,
	) {
	}

	public function info(string $message): void
	{
		$this->wcLogger->info($message, [
			'source' => $this->source,
		]);
	}
}