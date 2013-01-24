<?php

namespace Scrutinizer\Analyzer\Custom\Parser;

use Scrutinizer\Analyzer\Custom\ParserInterface;
use Scrutinizer\Model\Project;

class CheckstyleParser implements ParserInterface
{
    public function getFormat()
    {
        return 'checkstyle';
    }

    public function parse(Project $project, $content)
    {

    }
}