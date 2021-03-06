<?php
//
// ## BEGIN COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
// SOFTWARE NAME: BC Simple Flash Player
// SOFTWARE RELEASE: 0.4.0
// COPYRIGHT NOTICE: Copyright (C) 1999-2012 eZ Systems AS, 1999-2012 Brookins Consulting
// SOFTWARE LICENSE: GNU General Public License
// NOTICE: >
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of the GNU General Public License
//   as published by the Free Software Foundation.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.
//
//
// ## END COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
//

class bcsimpleflashplayertemplateoverrideInfo
{
    static function info()
    {
        return array( 'Name' => 'BC Simple Flash Player : Design / Template',
                      'Version' => '0.4.0',
                      'Copyright' => 'Copyright (C) 1999-2012 eZ Systems AS, 1999-2012 Brookins Consulting',
                      'License' => 'GNU General Public License',
                      'Includes the following third-party software' => array( 'Name' => 'swfobject',
                                                                              'Version' => '2.2',
                                                                              'License' => 'MIT License',
									      'License Url' => 'http://www.opensource.org/licenses/mit-license.php',
									      'Project' => 'http://code.google.com/p/swfobject/' ) );
    }
}

?>