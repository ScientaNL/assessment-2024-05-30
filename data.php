<?php

declare(strict_types=1);

// Don't edit this file :-)

$data = [
	["itemId" => 117, "parentId" => null, "title" => "Hoofdstuk 1", "ordering" => 1],
	["itemId" => 121, "parentId" => 117, "title" => "Hoofdstuk 1.1", "ordering" => 1],
	["itemId" => 132, "parentId" => 121, "title" => "Hoofdstuk 1.1.1", "ordering" => 1],
	["itemId" => 109, "parentId" => 132, "title" => "Hoofdstuk 1.1.1.1", "ordering" => 1],
	["itemId" => 131, "parentId" => 121, "title" => "Hoofdstuk 1.1.2", "ordering" => 2],
	["itemId" => 105, "parentId" => 131, "title" => "Hoofdstuk 1.1.2.1", "ordering" => 1],
	["itemId" => 106, "parentId" => 121, "title" => "Hoofdstuk 1.1.3", "ordering" => 3],
	["itemId" => 122, "parentId" => 117, "title" => "Hoofdstuk 1.2", "ordering" => 2],
	["itemId" => 136, "parentId" => 122, "title" => "Hoofdstuk 1.2.1", "ordering" => 1],
	["itemId" => 133, "parentId" => 122, "title" => "Hoofdstuk 1.2.2", "ordering" => 2],
	["itemId" => 110, "parentId" => 133, "title" => "Hoofdstuk 1.2.2.1", "ordering" => 1],
	["itemId" => 116, "parentId" => null, "title" => "Hoofdstuk 2", "ordering" => 2],
	["itemId" => 119, "parentId" => 116, "title" => "Hoofdstuk 2.1", "ordering" => 1],
	["itemId" => 124, "parentId" => 119, "title" => "Hoofdstuk 2.1.1", "ordering" => 1],
	["itemId" => 127, "parentId" => 124, "title" => "Hoofdstuk 2.1.1.1", "ordering" => 1],
	["itemId" => 125, "parentId" => 119, "title" => "Hoofdstuk 2.1.2", "ordering" => 2],
	["itemId" => 126, "parentId" => 119, "title" => "Hoofdstuk 2.1.3", "ordering" => 3],
	["itemId" => 128, "parentId" => 126, "title" => "Hoofdstuk 2.1.3.1", "ordering" => 1],
	["itemId" => 130, "parentId" => 126, "title" => "Hoofdstuk 2.1.3.2", "ordering" => 2],
	["itemId" => 129, "parentId" => 126, "title" => "Hoofdstuk 2.1.3.3", "ordering" => 3],
	["itemId" => 120, "parentId" => 116, "title" => "Hoofdstuk 2.2", "ordering" => 2],
	["itemId" => 135, "parentId" => 120, "title" => "Hoofdstuk 2.2.1", "ordering" => 1],
	["itemId" => 113, "parentId" => 135, "title" => "Hoofdstuk 2.2.1.1", "ordering" => 1],
	["itemId" => 139, "parentId" => 135, "title" => "Hoofdstuk 2.2.1.2", "ordering" => 2],
	["itemId" => 138, "parentId" => 120, "title" => "Hoofdstuk 2.2.2", "ordering" => 2],
	["itemId" => 123, "parentId" => 116, "title" => "Hoofdstuk 2.3", "ordering" => 3],
	["itemId" => 137, "parentId" => 123, "title" => "Hoofdstuk 2.3.1", "ordering" => 1],
	["itemId" => 134, "parentId" => 123, "title" => "Hoofdstuk 2.3.2", "ordering" => 2],
	["itemId" => 112, "parentId" => 134, "title" => "Hoofdstuk 2.3.2.1", "ordering" => 1],
	["itemId" => 111, "parentId" => 134, "title" => "Hoofdstuk 2.3.2.2", "ordering" => 2],
];

shuffle($data);

return $data;
