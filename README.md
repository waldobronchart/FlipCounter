FlipCounter
===========

A javascript flipping number counter without images (css-only).

Demo Video: https://vimeo.com/45532809

## Usage

``` html
<div id="mycounter">1337</div>
```

``` js
$("#mycounter").flipCounterInit();

// To update the value and animate
$("#mycounter").flipCounterUpdate(9001);
```

## Config Options

- **speed** Float *(default:0.2)* - speed of animation
-	**onFlip** Function - Is called after each flip animation has completed
- **onResize** Function - Is called when digits are added or removed

## Requirements

- jQuery
- jsTween - I used this for animation, it's quite slow on mobile devices

## License (Microsoft Public License (MS-PL))

Basically it means you can do whatever you want with it and you can't hold me responsible for anything related to this software.
http://www.opensource.org/licenses/ms-pl.html

I did the design myself, but it's heavily influenced by [Max Di Capua](http://dribbble.com/shots/51952-Flip-Clock-PSD)'s original design (available for free).
