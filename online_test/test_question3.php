<?php

function removeTagName(string $htmlString, array $allowTagName): string
{
    $isInsideTag = false;
    $result = '';
    $tag = '';

    for ($i = 0; isset($htmlString[$i]); $i++) {
        $char = $htmlString[$i];

        if ($char === '<') {
            $isInsideTag = true;
            $tag = '<';
        } elseif ($char === '>') {
            $tag .= '>';
            $isInsideTag = false;

            if (isAllowedTag($tag, $allowTagName)) {
                $result .= $tag;
            }

            $tag = '';
        } elseif ($isInsideTag) {
            $tag .= $char;
        } else {
            $result .= $char;
        }
    }

    return $result;
}

function isAllowedTag(string $tag, array $allowTagName): bool 
{
    $tagName = extractTagName($tag);

    foreach ($allowTagName as $allowName) {
        if ($tagName === $allowName) {
            return true;
        }
    }

    return false;
}

function extractTagName(string $tag): string
{
    $name = '';

    for ($index = 0; isset($tag[$index]); $index++) {
        $char = $tag[$index];

        if ($char === ' ' || $char === '/' || $char === '>') {
            break;
        }

        $name .= $char;
    }

    return $name;
}

$htmlString = '<div><h2>What is Lorem Ipsum?</h2><h3>What is Lorem Ipsum?</h3><span>What is Lorem Ipsum?</span><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br /> <br />960s with the versions of Lorem Ipsum.</p></div>';
$allowTagName = ['p', 'br'];

echo removeTagName($htmlString, $allowTagName);
