<?php

namespace Kendo\Dataviz\UI;

class ChartSeriesItemLabelsMargin extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The bottom margin of the labels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartSeriesItemLabelsMargin
    */
    public function bottom($value) {
        return $this->setProperty('bottom', $value);
    }

    /**
    * The left margin of the labels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartSeriesItemLabelsMargin
    */
    public function left($value) {
        return $this->setProperty('left', $value);
    }

    /**
    * The right margin of the labels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartSeriesItemLabelsMargin
    */
    public function right($value) {
        return $this->setProperty('right', $value);
    }

    /**
    * The top margin of the labels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartSeriesItemLabelsMargin
    */
    public function top($value) {
        return $this->setProperty('top', $value);
    }

//<< Properties
}

?>
