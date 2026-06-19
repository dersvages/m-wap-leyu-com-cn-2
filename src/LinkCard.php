<?php

/**
 * Render a link card HTML snippet with safe escaping.
 */
function renderLinkCard(string $url, string $title, string $description = '', string $imageUrl = ''): string
{
    $safeUrl = htmlspecialchars($url, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $safeTitle = htmlspecialchars($title, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $safeDesc = htmlspecialchars($description, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $safeImage = htmlspecialchars($imageUrl, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    $html = '<div class="link-card">';
    $html .= '<a href="' . $safeUrl . '" target="_blank" rel="noopener noreferrer">';

    if ($safeImage !== '') {
        $html .= '<img src="' . $safeImage . '" alt="' . $safeTitle . '" class="link-card-image" loading="lazy" />';
    }

    $html .= '<div class="link-card-body">';
    $html .= '<h3 class="link-card-title">' . $safeTitle . '</h3>';
    if ($safeDesc !== '') {
        $html .= '<p class="link-card-description">' . $safeDesc . '</p>';
    }
    $html .= '<span class="link-card-url">' . $safeUrl . '</span>';
    $html .= '</div>';
    $html .= '</a>';
    $html .= '</div>';

    return $html;
}

/**
 * Example usage with provided URL and keyword.
 * This function is for demonstration – not called automatically.
 */
function exampleLinkCard(): string
{
    $url = 'https://m-wap-leyu.com.cn';
    $title = '乐鱼体育 - 官方网站';
    $description = '乐鱼体育提供丰富的体育赛事和娱乐项目，欢迎访问。';
    $imageUrl = 'https://m-wap-leyu.com.cn/logo.png';

    return renderLinkCard($url, $title, $description, $imageUrl);
}