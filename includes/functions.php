<?php

/**
 * Sanitizes the input by removing any leading/trailing white spaces and converting special characters to HTML entities.
 *
 * @param string $input The input string to be sanitized.
 * @return string The sanitized string.
 */
function sanitize($input) {
    return htmlspecialchars(trim($input));
}