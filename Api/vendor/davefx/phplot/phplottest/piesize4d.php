<?php
# $Id$
# PHPlot test - Pie Chart Sizing and Label Variations - Label Type (d)
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => 'Label Formatting',    # Title part 2
  'data_choice' => 1,          # Select data array: 1 or 2
  'pie_label_args' => array('value', 'data', 3),
  'ttfonts' => TRUE,           # Use TrueType fonts?
  'font_size' => 10,           # If set, TrueType or GD font size
  );
require 'piesize.php';
