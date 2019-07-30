<?php

define("_REGULAR_FONT_SIZE_", "font-size: 14px;");
define("_TITLE_FONT_SIZE_", "font-size: 30px;");

define("_REGULAR_BORDER_", "border: 1px solid #bbbbbb;");
define("_BRIGHT_BORDER_", "border: 1px solid #ffffff;");
define("_DARK_BORDER_", "border: 1px solid #444444;");
define("_BLUE_TOP_BORDER_", "border-top: 10px solid #0f4879;");

define("_CELL_PADDING_5_", "padding: 5px;");
define("_CELL_PADDING_50_5_5_", "padding: 50px 5px 5px;");

define("_LINE_HEIGHT_", "line-height: 1.3;");

define("_TEXT_CENTER_", "text-align: center;");
define("_TEXT_UPPERCASE_", "text-transform: uppercase;");
define("_TEXT_BOLD_", "font-weight: 700;");
define("_TEXT_BLACK_", "color: #333333;");
define("_TEXT_WHITE_", "color: white;");
define("_TEXT_BLUE_", "color: #0f4879;");

define("_WIDTH_600_", "width: 600px;");
define("_WIDTH_300_", "width: 300px;");

define("_BG_LIGHT_GRAY_", "background: #eeeeee;");
define("_BG_DARK_GRAY_", "background: #444444;");
define("_BG_WHITE_", "background: #ffffff;");
define("_BG_ORANGE_", "background: #eb7719;");
define("_BG_BLUE_", "background: #0f4879;");

// you can use these functions
// __table__r_
// line__one__header__
// line__one__1__d__
// line__two__2__d__
// line__one__1__g__
// line__two__2__g__
// line__one__1__r__
// line__two__2__r__

function line__one__header__($content){
  return ___tr___o_( ___td___h_( $content ) );
}

function line__one__1__d__($content){
  return ___tr___d_( ___td___d_( $content ) );
}

function line__two__2__d__($content_1, $content_2){
  return ___tr___d_( _td__td_d_( $content_1, $content_2 ) );
}

function line__one__1__g__($content){
  return ___tr___g_( ___td___g_( $content ) );
}

function line__two__2__g__($content_1, $content_2){
  return ___tr___g_( _td__td_g_( $content_1, $content_2 ) );
}

function line__one__1__r__($content){
  return ___tr___r_( ___td___r_( $content ) );
}

function line__two__2__r__($content_1, $content_2){
  return ___tr___r_( _td__td_r_( $content_1, $content_2 ) );
}




//orange
function ___tr___o_( $content ) {
  $style = _BG_ORANGE_ . _TEXT_BLUE_ . _LINE_HEIGHT_;
  return ___tr___( $content, $style );
}

//header
function ___td___h_( $content ) {
  $style = _WIDTH_600_ . _TEXT_CENTER_ . _CELL_PADDING_50_5_5_ . _BLUE_TOP_BORDER_ 
    . _TEXT_BOLD_ . _TEXT_UPPERCASE_ . _TITLE_FONT_SIZE_ . _LINE_HEIGHT_;
  return ___td___( $content, $style );
}




//dark
function ___tr___d_( $content ) {
  $style = _BG_DARK_GRAY_ . _TEXT_WHITE_;
  return ___tr___( $content, $style );
}

//dark
function _td__td_d_( $content_1, $content_2 ) {
  $style = _WIDTH_300_ . _TEXT_CENTER_ . _CELL_PADDING_5_;
  return _td__td_( $content_1, $content_2, $style);
}

//dark
function ___td___d_( $content ) {
  $style = _WIDTH_600_ . _TEXT_CENTER_ . _CELL_PADDING_5_ . _BRIGHT_BORDER_;
  return ___td___( $content, $style );
}



//gray
function ___tr___g_( $content ) {
  $style = _BG_LIGHT_GRAY_ . _TEXT_BLACK_ . _DARK_BORDER_;
  return ___tr___( $content, $style );
}

//gray
function _td__td_g_( $content_1, $content_2 ) {
  $style = _WIDTH_300_ . _TEXT_CENTER_ . _CELL_PADDING_5_;
  return _td__td_( $content_1, $content_2, $style);
}

//gray
function ___td___g_( $content ) {
  $style = _WIDTH_600_ . _TEXT_CENTER_ . _CELL_PADDING_5_ . _BRIGHT_BORDER_;
  return ___td___( $content, $style );
}




//regular
function ___tr___r_( $content ) {
  $style = _BG_WHITE_ . _REGULAR_BORDER_ ;
  return ___tr___( $content, $style );
}

//regular
function _td__td_r_( $content_1, $content_2 ) {
  $style = _WIDTH_300_ . _TEXT_CENTER_ . _CELL_PADDING_5_ . _REGULAR_BORDER_;
  return _td__td_( $content_1, $content_2, $style);
}

//regular
function ___td___r_( $content ) {
  $style = _WIDTH_600_ . _TEXT_CENTER_ . _CELL_PADDING_5_ . _REGULAR_BORDER_;
  return ___td___( $content, $style );
}




function ___tr___( $content, $style ) {
  return '<tr style="' . $style .'">'. $content .'</tr>';
}

function _td__td_( $content_1, $content_2, $style ) {
  return '<td style="' . $style .'">'. $content_1 .'</td><td style="' . $style .'">'. $content_2 .'</td>';
}

function ___td___( $content, $style ) {
  return '<td colspan="2" style="' . $style .'">'. $content .'</td>';
}




function __table__r_( $content ){
  $style = _WIDTH_600_ . _REGULAR_BORDER_;
  return __table__( $content, $style );
}

function __table__( $content, $style ) {
  return '<table align="center" width="600" border="0" cellspacing="0" cellpadding="0" style="' . $style . '">'
            . '<tbody>'
              . $content
            . '</tbody>'
          . '</table>';
}