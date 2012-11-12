package Split::L10N::ja;

use strict;
use base 'Split::L10N';
use vars qw( %Lexicon );

%Lexicon = (
	'_PLUGIN_DESCRIPTION_' => 'ex) <br />&lt;mt:var name="hoge" value="Apple,Oragne,Banana"&gt;<br />&lt;mt:var name="hoge" split=",","lines"&gt;<br />&lt;mt:loop name="lines"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;mt:var name="__value__"&gt;<br />&lt;/mt:loop&gt;',
);

1;
