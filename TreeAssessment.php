<?php

declare(strict_types=1);

namespace ScientaAssessment;

interface TreeAssessment
{
	/**
	 * Build a tree (multidimensional array) based on a list representation of a tree.
	 *
	 * @param array $listData A list representation of tree data
	 */
	public function buildTree(array $listData): mixed;

	/**
	 * Generate an HTML tree based on <ul>'s and <li>'s
	 * @param array $treeData a multidimensional tree
	 * @return string a valid HTML string containing the tree
	 */
	public function generateHtmlTree(array $treeData): string;
}
