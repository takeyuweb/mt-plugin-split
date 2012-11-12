package Split::Tags;

use strict;
use utf8;

sub _hdlr_split {
    my ( $str, $arg, $ctx ) = @_;
    my ( $delimiter, $name ) = @$arg;
    my @parts = split $delimiter, $str;
    my $vars  = $ctx->{__stash}{vars} ||= {};
    $vars->{ $name }  = \@parts;
    return '';
}

1;
