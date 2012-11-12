mt-plugin-split
===============

split modifier for MovableType 5.

変数を指定した区切り文字で分割して変数に格納するモディファイアを提供します。Perl / PHP 両対応。

## How to use

### MTML

    <mt:var name="hoge" value="Apple,Oragne,Banana">
    <mt:var name="hoge" split=",","lines">
    <mt:loop name="lines">
        [<mt:var name="__value__">]
    </mt:loop>

### Output

    [Apple] [Oragne] [Banana] 

## Contributing to mt-plugin-split

Fork, fix, then send me a pull request.

## Copyright

Copyright© 2012 Yuichi Takeuchi, released under the MIT license
