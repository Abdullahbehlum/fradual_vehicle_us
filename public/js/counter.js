$(document).ready(function () {
    function formatNumber(num, isPercentage = false, hasPlus = false) {
        if (isPercentage) {
            return num + "%";
        }
        if (hasPlus) {
            return Math.floor(num / 1000) + "k+";
        }
        if (num >= 1000) {
            return Math.floor(num / 1000) + "k";
        }
        return num;
    }

    function counter(
        $element,
        start,
        end,
        duration,
        isPercentage = false,
        hasPlus = false
    ) {
        $({ countNum: start }).animate(
            { countNum: end },
            {
                duration: duration,
                easing: "linear",
                step: function () {
                    $element.text(
                        formatNumber(
                            Math.floor(this.countNum),
                            isPercentage,
                            hasPlus
                        )
                    );
                },
                complete: function () {
                    $element.text(
                        formatNumber(this.countNum, isPercentage, hasPlus)
                    );
                    if ($element.attr("id") === "yearsExperience") {
                        $element.text($element.text() + "+");
                    }
                    if ($element.attr("id") === "experience_15") {
                        $element.text($element.text() + "+");
                    }
                },
            }
        );
    }

    var waypoint = new Waypoint({
        element: document.getElementById("customer_sec"),
        handler: function (direction) {
            counter($("#happyCustomer"), 0, 12000, 2000);
            counter($("#customerSatisfaction"), 0, 99, 2000, true);
            counter($("#professionalExperts"), 0, 78000, 2000, false, true); 
            counter($("#yearsExperience"), 0, 25, 2000, false, false); 
            counter($("#experience_15"), 0, 15, 1200, false, false); 
            this.destroy();
        },
        offset: "75%", 
    });
});
