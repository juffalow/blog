<p class="text-left"></p>
<h2 class="theme-subheading" id="cyclomatic-complexity">Cyclomatic complexity</h2>
<p class="text-left"></p>
<h4 class="theme-subheading" id="cyclomatic-complexity-thresholds">Thresholds</h4>
<p class="text-left"><strong>1 - 4</strong> is considered as <strong>low complexity</strong></p>
<p class="text-left"><strong>5 - 7</strong> is <strong>moderate</strong> but still <strong>easy</strong> to understand</p>
<p class="text-left"><strong>8 - 10</strong> has a <strong>high complexity</strong></p>
<p class="text-left">everything greater than <strong>10</strong> is <strong>very complex</strong> and <strong>hard</strong> to understand</p>
<h4 class="theme-subheading" id="cyclomatic-complexity-example">Example</h4>
<p class="text-left">This example is from PHP Depend documentation page :</p>
<div class="well">
<pre class="prettyprint">
&lg;?php
//                                                         | CCN
// -------------------------------------------------------------
class CyclomaticComplexityNumber                        // |  0
{                                                       // |  0
    public function exampe( $x, $y )                    // |  1
    {                                                   // |  0
        if ( $x > 23 || $y < 42 )                       // |  1
        {                                               // |  0
            for ( $i = $x; $i >= $x && $i <= $y; ++$i ) // |  1
            {                                           // |  0
            }                                           // |  0
        }                                               // |  0
        else                                            // |  0
        {                                               // |  0
            switch ( $x + $y )                          // |  0
            {                                           // |  0
                case 1:                                 // |  1
                    break;                              // |  0
                case 2:                                 // |  1
                    break;                              // |  0
                default:                                // |  0
                    break;                              // |  0
            }                                           // |  0
        }                                               // |  0
    }                                                   // |  0
    file_exists('/tmp/log') or touch('/tmp/log');       // |  0
}                                                       // |  0
// -------------------------------------------------------------
//                                                         |  5
</pre>
</div>
<h2 class="theme-subheading" id="npath">NPath</h2>
<p class="text-left">The definition from PHP Mess Detector documentation is a little bit tricky for the first time. But when you find some example and read few other things it becomes more clear. Here is the definition :</p>
<blockquote class="blockquote-reverse">
  <p>The NPath complexity of a method is the number of acyclic execution paths through that method.</p>
  <footer><a href="https://phpmd.org/rules/codesize.html#npathcomplexity">PHP Mess Detector</a></footer>
</blockquote>
<p class="text-left">In other words it is a count of all possible paths through a method. This doesn't sound that interesting as it in fact is. Reason? If you write unit tests and you want to have 100% code coverage, you need to write the same number of tests as is the count of possible ways. E. g. consider the <i>npath</i> is 32, so you have to test 32 possible outcomes.</p>
<p class="text-left">And the number is growing really fast. It is not unusual to see numbers greater than than 100 000. <i>I saw functions with npath complexity of 643109289984, 178876171875 and the winner was 5225429147884407000000.</i></p>
<h4 class="theme-subheading" id="npath-thresholds">Thresholds</h4>
<p class="text-left">The default threshold value for this is <strong>200</strong> and staying under this value is something you should strive for.</p>
<h4 class="theme-subheading" id="npath-example">Example</h4>
<div class="well">
<pre class="prettyprint">
&lg;?php
function foo($a, $b) {
    if ($a > 10) {
        echo 1;
    } else {
        echo 2;
    }
    if ($a > $b) {
        echo 3;
    } else {
        echo 4;
    }
}
</pre>
</div>
<h2 class="theme-subheading" id="php-depend">PHP Depend</h2>
<p class="text-left"></p>
<h2 class="theme-subheading" id="php-mess-detector">PHP Mess Detector</h2>
<p class="text-left"></p>
<h2 class="theme-subheading" id="conclusion">Conclusion</h2>
<p class="text-left"></p>
<h4 class="theme-subheading" id="references">References</h4>
<p class="text-left"><a href="http://www.tutorialspoint.com/software_testing_dictionary/cyclomatic_complexity.htm">Cyclomatic complexity</a> post on <strong>tutorials point</strong> describing what it is and how to calculate it with example and flow graph.</p>
<p class="text-left"><a href="https://en.wikipedia.org/wiki/Cyclomatic_complexity">Wikipedia</a> page about cyclomatic complexity.</p>
<p class="text-left"><a href="https://pdepend.org/documentation/software-metrics/cyclomatic-complexity.html"></a></p>
<p class="text-left"><a href="https://modess.io/npath-complexity-cyclomatic-complexity-explained/"></a></p>



