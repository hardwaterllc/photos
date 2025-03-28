<?php

/**
 * SPDX-License-Identifier: MIT
 * Copyright (c) 2017-2018 Tobias Reich
 * Copyright (c) 2018-2025 LycheeOrg.
 */

use App\Legacy\BaseConfigMigration;

return new class() extends BaseConfigMigration {
	public function getConfigs(): array
	{
		return [
			[
				'key' => 'SA_enabled',
				'value' => '1',
				'confidentiality' => '2',
				'cat' => 'Smart Albums',
				'type_range' => self::BOOL,
				'description' => 'Enable Smart Albums',
			],
		];
	}
};
