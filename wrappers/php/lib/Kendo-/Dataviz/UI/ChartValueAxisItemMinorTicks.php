<?php

namespace Kendo\Dataviz\UI;

class ChartValueAxisItemMinorTicks extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The color of the value axis minor ticks lines. Accepts a valid CSS color string, including hex and rgb.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartValueAxisItemMinorTicks
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The length of the tick line in pixels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartValueAxisItemMinorTicks
    */
    public function size($value) {
        return $this->setProperty('size', $value);
    }

    /**
    * If set to true the chart will display the value axis minor ticks. By default the value axis minor ticks are not visible.
    * @param boolean $value
    * @return \Kendo\Dataviz\UI\ChartValueAxisItemMinorTicks
    */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
    * The width of the minor ticks in pixels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartValueAxisItemMinorTicks
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
    * The step of the value axis minor ticks.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartValueAxisItemMinorTicks
    */
    public function step($value) {
        return $this->setProperty('step', $value);
    }

    /**
    * The skip of the value axis minor ticks.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartValueAxisItemMinorTicks
    */
    public function skip($value) {
        return $this->setProperty('skip', $value);
    }

//<< Properties
}

?>
