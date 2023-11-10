<!-- Customizer-->
<script>
    !(function() {
        function e(e) {
            return localStorage.getItem(e);
        }

        function r(e, r) {
            localStorage.setItem(e, r);
        }
        var t = document.getElementById("customizer-styles"),
            n = document.getElementById("custom-generated-styles"),
            o = `\n    :root {\n      ${
        e("theme-primary") && `--ar-primary: ${e("theme-primary")};`
      }\n      ${
        e("theme-primary-rgb") &&
        `--ar-primary-rgb: ${e("theme-primary-rgb")};`
      }\n      ${
        e("theme-warning") && `--ar-warning-rgb: ${e("theme-warning")};`
      }\n      ${
        e("theme-warning-rgb") &&
        `--ar-warning-rgb: ${e("theme-warning-rgb")};`
      }\n      ${
        e("theme-info") && `--ar-info-rgb: ${e("theme-info")};`
      }\n      ${
        e("theme-info-rgb") && `--ar-info-rgb: ${e("theme-info-rgb")};`
      }\n      ${
        e("theme-success") && `--ar-success-rgb: ${e("success-info")};`
      }\n      ${
        e("theme-success-rgb") &&
        `--ar-success-rgb: ${e("success-info-rgb")};`
      }\n      ${
        e("theme-danger") && `--ar-danger-rgb: ${e("danger-info")};`
      }\n      ${
        e("theme-danger-rgb") && `--ar-danger-rgb: ${e("danger-info-rgb")};`
      }\n      ${
        e("theme-font-family") &&
        `--ar-body-font-family: ${e("theme-font-family")};`
      }\n      ${
        e("theme-root-font-size") &&
        `--ar-root-font-size: ${e("theme-root-font-size")};`
      }\n      ${
        e("theme-body-font-size") &&
        `--ar-body-font-size: ${e("theme-body-font-size")};`
      }\n      ${
        e("theme-border-width") &&
        `--ar-border-width: ${e("theme-border-width")};`
      }\n      ${
        e("theme-border-radius") &&
        `--ar-border-radius: ${e("theme-border-radius")};`
      }\n      ${
        e("theme-border-radius-sm") &&
        `--ar-border-radius-sm: ${e("theme-border-radius-sm")};`
      }\n      ${
        e("theme-border-radius-lg") &&
        `--ar-border-radius-lg: ${e("theme-border-radius-lg")};`
      }\n      ${
        e("theme-border-radius-xl") &&
        `--ar-border-radius-xl: ${e("theme-border-radius-xl")};`
      }\n      ${
        e("theme-border-radius-2xl") &&
        `--ar-border-radius-2xl: ${e("theme-border-radius-2xl")};`
      }\n      ${
        e("theme-primary") && `--ar-link-color: ${e("theme-primary")};`
      }\n      ${
        e("theme-primary-btn-hover-active-border-bg-color") &&
        `--ar-link-hover-color: ${e(
              "theme-primary-btn-hover-active-border-bg-color"
            )};`
      }\n    }\n    .btn-primary {\n      ${
        e("theme-primary") && `--ar-btn-bg: ${e("theme-primary")};`
      }\n      ${
        e("theme-primary") &&
        `--ar-btn-border-color: ${e("theme-primary")};`
      }\n      ${
        e("theme-primary-btn-hover-active-border-bg-color") &&
        `--ar-btn-hover-bg: ${e(
              "theme-primary-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-primary-btn-hover-active-border-bg-color") &&
        `--ar-btn-hover-border-color: ${e(
              "theme-primary-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-primary-btn-hover-active-border-bg-color") &&
        `--ar-btn-active-bg: ${e(
              "theme-primary-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-primary-btn-hover-active-border-bg-color") &&
        `--ar-btn-active-border-color: ${e(
              "theme-primary-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-primary") && `--ar-btn-disabled-bg: ${e("theme-primary")};`
      }\n      ${
        e("theme-primary") &&
        `--ar-btn-disabled-border-color: ${e("theme-primary")};`
      }\n    }\n    .btn-warning {\n      ${
        e("theme-warning") && `--ar-btn-bg: ${e("theme-warning")};`
      }\n      ${
        e("theme-warning") &&
        `--ar-btn-border-color: ${e("theme-warning")};`
      }\n      ${
        e("theme-warning-btn-hover-active-border-bg-color") &&
        `--ar-btn-hover-bg: ${e(
              "theme-warning-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-warning-btn-hover-active-border-bg-color") &&
        `--ar-btn-hover-border-color: ${e(
              "theme-warning-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-warning-btn-hover-active-border-bg-color") &&
        `--ar-btn-active-bg: ${e(
              "theme-warning-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-warning-btn-hover-active-border-bg-color") &&
        `--ar-btn-active-border-color: ${e(
              "theme-warning-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-warning") && `--ar-btn-disabled-bg: ${e("theme-warning")};`
      }\n      ${
        e("theme-warning") &&
        `--ar-btn-disabled-border-color: ${e("theme-warning")};`
      }\n    }\n    .btn-info {\n      ${
        e("theme-info") && `--ar-btn-bg: ${e("theme-info")};`
      }\n      ${
        e("theme-info") && `--ar-btn-border-color: ${e("theme-info")};`
      }\n      ${
        e("theme-info-btn-hover-active-border-bg-color") &&
        `--ar-btn-hover-bg: ${e(
              "theme-info-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-info-btn-hover-active-border-bg-color") &&
        `--ar-btn-hover-border-color: ${e(
              "theme-info-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-info-btn-hover-active-border-bg-color") &&
        `--ar-btn-active-bg: ${e(
              "theme-info-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-info-btn-hover-active-border-bg-color") &&
        `--ar-btn-active-border-color: ${e(
              "theme-info-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-info") && `--ar-btn-disabled-bg: ${e("theme-info")};`
      }\n      ${
        e("theme-info") &&
        `--ar-btn-disabled-border-color: ${e("theme-info")};`
      }\n    }\n    .btn-success {\n      ${
        e("theme-success") && `--ar-btn-bg: ${e("theme-success")};`
      }\n      ${
        e("theme-success") &&
        `--ar-btn-border-color: ${e("theme-success")};`
      }\n      ${
        e("theme-success-btn-hover-active-border-bg-color") &&
        `--ar-btn-hover-bg: ${e(
              "theme-success-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-success-btn-hover-active-border-bg-color") &&
        `--ar-btn-hover-border-color: ${e(
              "theme-success-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-success-btn-hover-active-border-bg-color") &&
        `--ar-btn-active-bg: ${e(
              "theme-success-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-success-btn-hover-active-border-bg-color") &&
        `--ar-btn-active-border-color: ${e(
              "theme-success-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-success") && `--ar-btn-disabled-bg: ${e("theme-success")};`
      }\n      ${
        e("theme-success") &&
        `--ar-btn-disabled-border-color: ${e("theme-success")};`
      }\n    }\n    .btn-danger {\n      ${
        e("theme-danger") && `--ar-btn-bg: ${e("theme-danger")};`
      }\n      ${
        e("theme-danger") && `--ar-btn-border-color: ${e("theme-danger")};`
      }\n      ${
        e("theme-danger-btn-hover-active-border-bg-color") &&
        `--ar-btn-hover-bg: ${e(
              "theme-danger-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-danger-btn-hover-active-border-bg-color") &&
        `--ar-btn-hover-border-color: ${e(
              "theme-danger-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-danger-btn-hover-active-border-bg-color") &&
        `--ar-btn-active-bg: ${e(
              "theme-danger-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-danger-btn-hover-active-border-bg-color") &&
        `--ar-btn-active-border-color: ${e(
              "theme-danger-btn-hover-active-border-bg-color"
            )};`
      }\n      ${
        e("theme-danger") && `--ar-btn-disabled-bg: ${e("theme-danger")};`
      }\n      ${
        e("theme-danger") &&
        `--ar-btn-disabled-border-color: ${e("theme-danger")};`
      }\n    }\n    .btn-outline-primary {\n      ${
        e("theme-primary") && `--ar-btn-color: ${e("theme-primary")};`
      }\n      ${
        e("theme-primary") &&
        `--ar-btn-border-color: ${e("theme-primary")};`
      }\n      ${
        e("theme-primary") && `--ar-btn-hover-bg: ${e("theme-primary")};`
      }\n      ${
        e("theme-primary") &&
        `--ar-btn-hover-border-color: ${e("theme-primary")};`
      }\n      ${
        e("theme-primary") && `--ar-btn-active-bg: ${e("theme-primary")};`
      }\n      ${
        e("theme-primary") &&
        `--ar-btn-active-border-color: ${e("theme-primary")};`
      }\n      ${
        e("theme-primary") &&
        `--ar-btn-disabled-color: ${e("theme-primary")};`
      }\n      ${
        e("theme-primary") &&
        `--ar-btn-disabled-border-color: ${e("theme-primary")};`
      }\n    }\n    .btn-outline-warning {\n      ${
        e("theme-warning") && `--ar-btn-color: ${e("theme-warning")};`
      }\n      ${
        e("theme-warning") &&
        `--ar-btn-border-color: ${e("theme-warning")};`
      }\n      ${
        e("theme-warning") && `--ar-btn-hover-bg: ${e("theme-warning")};`
      }\n      ${
        e("theme-warning") &&
        `--ar-btn-hover-border-color: ${e("theme-warning")};`
      }\n      ${
        e("theme-warning") && `--ar-btn-active-bg: ${e("theme-warning")};`
      }\n      ${
        e("theme-warning") &&
        `--ar-btn-active-border-color: ${e("theme-warning")};`
      }\n      ${
        e("theme-warning") &&
        `--ar-btn-disabled-color: ${e("theme-warning")};`
      }\n      ${
        e("theme-warning") &&
        `--ar-btn-disabled-border-color: ${e("theme-warning")};`
      }\n    }\n    .btn-outline-info {\n      ${
        e("theme-info") && `--ar-btn-color: ${e("theme-info")};`
      }\n      ${
        e("theme-info") && `--ar-btn-border-color: ${e("theme-info")};`
      }\n      ${
        e("theme-info") && `--ar-btn-hover-bg: ${e("theme-info")};`
      }\n      ${
        e("theme-info") &&
        `--ar-btn-hover-border-color: ${e("theme-info")};`
      }\n      ${
        e("theme-info") && `--ar-btn-active-bg: ${e("theme-info")};`
      }\n      ${
        e("theme-info") &&
        `--ar-btn-active-border-color: ${e("theme-info")};`
      }\n      ${
        e("theme-info") && `--ar-btn-disabled-color: ${e("theme-info")};`
      }\n      ${
        e("theme-info") &&
        `--ar-btn-disabled-border-color: ${e("theme-info")};`
      }\n    }\n    .btn-outline-success {\n      ${
        e("theme-success") && `--ar-btn-color: ${e("theme-success")};`
      }\n      ${
        e("theme-success") &&
        `--ar-btn-border-color: ${e("theme-success")};`
      }\n      ${
        e("theme-success") && `--ar-btn-hover-bg: ${e("theme-success")};`
      }\n      ${
        e("theme-success") &&
        `--ar-btn-hover-border-color: ${e("theme-success")};`
      }\n      ${
        e("theme-success") && `--ar-btn-active-bg: ${e("theme-success")};`
      }\n      ${
        e("theme-success") &&
        `--ar-btn-active-border-color: ${e("theme-success")};`
      }\n      ${
        e("theme-success") &&
        `--ar-btn-disabled-color: ${e("theme-success")};`
      }\n      ${
        e("theme-success") &&
        `--ar-btn-disabled-border-color: ${e("theme-success")};`
      }\n    }\n    .btn-outline-danger {\n      ${
        e("theme-danger") && `--ar-btn-color: ${e("theme-danger")};`
      }\n      ${
        e("theme-danger") && `--ar-btn-border-color: ${e("theme-danger")};`
      }\n      ${
        e("theme-danger") && `--ar-btn-hover-bg: ${e("theme-danger")};`
      }\n      ${
        e("theme-danger") &&
        `--ar-btn-hover-border-color: ${e("theme-danger")};`
      }\n      ${
        e("theme-danger") && `--ar-btn-active-bg: ${e("theme-danger")};`
      }\n      ${
        e("theme-danger") &&
        `--ar-btn-active-border-color: ${e("theme-danger")};`
      }\n      ${
        e("theme-danger") &&
        `--ar-btn-disabled-color: ${e("theme-danger")};`
      }\n      ${
        e("theme-danger") &&
        `--ar-btn-disabled-border-color: ${e("theme-danger")};`
      }\n    }\n  `,
            a = o;
        a = o.replace(/null|\s*(?![A-Z])/g, "");
        t.append(a),
            a.split("}").map(function(e) {
                -1 !== e.indexOf("{--") && n.append(e + "}");
            });
        var i = {
            root: t.sheet.cssRules[0],
            primaryBtn: t.sheet.cssRules[1],
            warningBtn: t.sheet.cssRules[2],
            infoBtn: t.sheet.cssRules[3],
            successBtn: t.sheet.cssRules[4],
            dangerBtn: t.sheet.cssRules[5],
            primaryOutlineBtn: t.sheet.cssRules[6],
            warningOutlineBtn: t.sheet.cssRules[7],
            infoOutlineBtn: t.sheet.cssRules[8],
            successOutlineBtn: t.sheet.cssRules[9],
            dangerOutlineBtn: t.sheet.cssRules[10],
        };

        function b() {
            (n.innerHTML = i.root.cssText.replace(/null|\s*(?![A-Z])/g, "")),
            (n.innerHTML +=
                -1 === i.primaryBtn.cssText.indexOf("{ }") ?
                i.primaryBtn.cssText.replace(/ /g, "") :
                ""),
            (n.innerHTML +=
                -1 === i.warningBtn.cssText.indexOf("{ }") ?
                i.warningBtn.cssText.replace(/ /g, "") :
                ""),
            (n.innerHTML +=
                -1 === i.infoBtn.cssText.indexOf("{ }") ?
                i.infoBtn.cssText.replace(/ /g, "") :
                ""),
            (n.innerHTML +=
                -1 === i.successBtn.cssText.indexOf("{ }") ?
                i.successBtn.cssText.replace(/ /g, "") :
                ""),
            (n.innerHTML +=
                -1 === i.dangerBtn.cssText.indexOf("{ }") ?
                i.dangerBtn.cssText.replace(/ /g, "") :
                ""),
            (n.innerHTML +=
                -1 === i.primaryOutlineBtn.cssText.indexOf("{ }") ?
                i.primaryOutlineBtn.cssText.replace(/ /g, "") :
                ""),
            (n.innerHTML +=
                -1 === i.warningOutlineBtn.cssText.indexOf("{ }") ?
                i.warningOutlineBtn.cssText.replace(/ /g, "") :
                ""),
            (n.innerHTML +=
                -1 === i.infoOutlineBtn.cssText.indexOf("{ }") ?
                i.infoOutlineBtn.cssText.replace(/ /g, "") :
                ""),
            (n.innerHTML +=
                -1 === i.successOutlineBtn.cssText.indexOf("{ }") ?
                i.successOutlineBtn.cssText.replace(/ /g, "") :
                ""),
            (n.innerHTML +=
                -1 === i.dangerOutlineBtn.cssText.indexOf("{ }") ?
                i.dangerOutlineBtn.cssText.replace(/ /g, "") :
                "");
        }

        function s(e) {
            var r = 0,
                t = 0,
                n = 0;
            return (
                4 == e.length ?
                ((r = "0x" + e[1] + e[1]),
                    (t = "0x" + e[2] + e[2]),
                    (n = "0x" + e[3] + e[3])) :
                7 == e.length &&
                ((r = "0x" + e[1] + e[2]),
                    (t = "0x" + e[3] + e[4]),
                    (n = "0x" + e[5] + e[6])),
                +r + "," + +t + "," + +n
            );
        }

        function c(e, r) {
            var t = parseInt(e.replace("#", ""), 16),
                n = Math.round(2.55 * r),
                o = (t >> 16) + n,
                a = ((t >> 8) & 255) + n,
                i = (255 & t) + n;
            return (
                "#" +
                (
                    16777216 +
                    65536 * (o < 255 ? (o < 1 ? 0 : o) : 255) +
                    256 * (a < 255 ? (a < 1 ? 0 : a) : 255) +
                    (i < 255 ? (i < 1 ? 0 : i) : 255)
                )
                .toString(16)
                .slice(1)
            );
        }
        for (
            var l = document.querySelectorAll("#theme-colors .color-swatch"),
                d = 0; d < l.length; d++
        ) {
            var m = l[d].querySelector("label"),
                h = l[d].querySelector('input[type="color"]');
            (colorInput = l[d].querySelector('input[type="text"]')),
            (colorInput.value = e(l[d].id) || colorInput.value),
            (h.value = e(l[d].id) || h.value),
            (m.style.backgroundColor = e(l[d].id) || h.value),
            h.addEventListener("input", function(e) {
                    var n = e.target.parentElement.querySelector("label"),
                        o = e.target.parentElement.querySelector('input[type="text"]'),
                        a = e.target.value;
                    t.sheet.cssRules[d + 1];
                    r("theme-" + e.target.id, a),
                        r("theme-" + e.target.id + "-rgb", s(a)),
                        r(
                            "theme-" + e.target.id + "-btn-hover-active-border-bg-color",
                            c(a, -10)
                        ),
                        (n.style.backgroundColor = a),
                        (o.value = a),
                        i.root.style.setProperty("--ar-" + e.target.id, a),
                        i.root.style.setProperty("--ar-" + e.target.id + "-rgb", s(a)),
                        i[e.target.id + "Btn"].style.setProperty("--ar-btn-bg", a),
                        i[e.target.id + "Btn"].style.setProperty(
                            "--ar-btn-border-color",
                            a
                        ),
                        i[e.target.id + "Btn"].style.setProperty(
                            "--ar-btn-hover-bg",
                            c(a, -10)
                        ),
                        i[e.target.id + "Btn"].style.setProperty(
                            "--ar-btn-hover-border-color",
                            c(a, -10)
                        ),
                        i[e.target.id + "Btn"].style.setProperty(
                            "--ar-btn-active-bg",
                            c(a, -10)
                        ),
                        i[e.target.id + "Btn"].style.setProperty(
                            "--ar-btn-active-border-color",
                            c(a, -10)
                        ),
                        i[e.target.id + "Btn"].style.setProperty(
                            "--ar-btn-disabled-bg",
                            a
                        ),
                        i[e.target.id + "Btn"].style.setProperty(
                            "--ar-btn-disabled-border-color",
                            a
                        ),
                        i[e.target.id + "OutlineBtn"].style.setProperty(
                            "--ar-btn-color",
                            a
                        ),
                        i[e.target.id + "OutlineBtn"].style.setProperty(
                            "--ar-btn-border-color",
                            a
                        ),
                        i[e.target.id + "OutlineBtn"].style.setProperty(
                            "--ar-btn-hover-bg",
                            a
                        ),
                        i[e.target.id + "OutlineBtn"].style.setProperty(
                            "--ar-btn-hover-border-color",
                            a
                        ),
                        i[e.target.id + "OutlineBtn"].style.setProperty(
                            "--ar-btn-active-bg",
                            a
                        ),
                        i[e.target.id + "OutlineBtn"].style.setProperty(
                            "--ar-btn-active-border-color",
                            a
                        ),
                        i[e.target.id + "OutlineBtn"].style.setProperty(
                            "--ar-btn-disabled-color",
                            a
                        ),
                        i[e.target.id + "OutlineBtn"].style.setProperty(
                            "--ar-btn-disabled-border-color",
                            a
                        ),
                        "primary" === e.target.id &&
                        (r("theme-link-hover-color", c(a, -10)),
                            i.root.style.setProperty("--ar-link-color", a),
                            i.root.style.setProperty("--ar-link-hover-color", c(a, -10))),
                        b();
                }),
                colorInput.addEventListener("change", function(e) {
                    var t = e.target.parentElement.querySelector("label"),
                        n = e.target.parentElement.querySelector('input[type="color"]'),
                        o = e.target.value;
                    0 != o.length &&
                        o.startsWith("#") &&
                        (r("theme-" + n.id, o),
                            r("theme-" + n.id + "-rgb", s(o)),
                            r(
                                "theme-" + n.id + "-btn-hover-active-border-bg-color",
                                c(o, -10)
                            ),
                            (t.style.backgroundColor = o),
                            (n.value = o),
                            i.root.style.setProperty("--ar-" + n.id, o),
                            i.root.style.setProperty("--ar-" + n.id + "-rgb", s(o)),
                            i[n.id + "Btn"].style.setProperty("--ar-btn-bg", o),
                            i[n.id + "Btn"].style.setProperty("--ar-btn-border-color", o),
                            i[n.id + "Btn"].style.setProperty(
                                "--ar-btn-hover-bg",
                                c(o, -10)
                            ),
                            i[n.id + "Btn"].style.setProperty(
                                "--ar-btn-hover-border-color",
                                c(o, -10)
                            ),
                            i[n.id + "Btn"].style.setProperty(
                                "--ar-btn-active-bg",
                                c(o, -10)
                            ),
                            i[n.id + "Btn"].style.setProperty(
                                "--ar-btn-active-border-color",
                                c(o, -10)
                            ),
                            i[n.id + "Btn"].style.setProperty("--ar-btn-disabled-bg", o),
                            i[n.id + "Btn"].style.setProperty(
                                "--ar-btn-disabled-border-color",
                                o
                            ),
                            i[n.id + "OutlineBtn"].style.setProperty("--ar-btn-color", o),
                            i[n.id + "OutlineBtn"].style.setProperty(
                                "--ar-btn-border-color",
                                o
                            ),
                            i[n.id + "OutlineBtn"].style.setProperty(
                                "--ar-btn-hover-bg",
                                o
                            ),
                            i[n.id + "OutlineBtn"].style.setProperty(
                                "--ar-btn-hover-border-color",
                                o
                            ),
                            i[n.id + "OutlineBtn"].style.setProperty(
                                "--ar-btn-active-bg",
                                o
                            ),
                            i[n.id + "OutlineBtn"].style.setProperty(
                                "--ar-btn-active-border-color",
                                o
                            ),
                            i[n.id + "OutlineBtn"].style.setProperty(
                                "--ar-btn-disabled-color",
                                o
                            ),
                            i[n.id + "OutlineBtn"].style.setProperty(
                                "--ar-btn-disabled-border-color",
                                o
                            ),
                            "primary" === n.id &&
                            (r("theme-link-hover-color", c(o, -10)),
                                i.root.style.setProperty("--ar-link-color", o),
                                i.root.style.setProperty("--ar-link-hover-color", c(o, -10))),
                            b());
                });
        }
        var g = document.getElementById("font-url"),
            u = document.getElementById("google-font");
        (u.href = e("theme-font-url") || g.value),
        (g.value = e("theme-font-url") || g.value),
        g.addEventListener("blur", function(e) {
            var t = e.target.value;
            r("theme-font-url", t), (u.href = t);
        });
        var v = document.getElementById("body-font-family");
        (v.value = e("theme-font-family") || v.value),
        v.addEventListener("blur", function(e) {
            var t = e.target.value;
            r("theme-font-family", t),
                i.root.style.setProperty("--ar-body-font-family", t),
                b();
        });
        var $ = document.getElementById("root-font-size");
        ($.value = e("theme-root-font-size") || $.value),
        $.addEventListener("change", function(e) {
            var t = e.target.value;
            r("theme-root-font-size", t),
                i.root.style.setProperty("--ar-root-font-size", t),
                b();
        });
        var y = document.getElementById("body-font-size");
        (y.value = e("theme-body-font-size") || y.value),
        y.addEventListener("change", function(e) {
            var t = e.target.value;
            r("theme-body-font-size", t),
                i.root.style.setProperty("--ar-body-font-size", t),
                b();
        });
        var p = document.getElementById("border-width");
        (p.value = parseInt(e("theme-border-width")) || p.value),
        p.addEventListener("input", function(e) {
            var t = e.target.value;
            r("theme-border-width", t + "px"),
                i.root.style.setProperty("--ar-border-width", t + "px"),
                b();
        });
        var f = document.getElementById("border-radius");
        (f.value = parseFloat(e("theme-border-radius")) || f.value),
        f.addEventListener("input", function(e) {
            var t = e.target.value;
            r("theme-border-radius", t + "rem"),
                i.root.style.setProperty("--ar-border-radius", t + "rem"),
                b();
        });
        var B = document.querySelectorAll(
            '#theme-border-radiuses input[type="number"'
        );
        for (d = 0; d < B.length; d++)
            (B[d].value = e("theme-" + B[d].id + "multiplier") || B[d].value),
            B[d].addEventListener("input", function(e) {
                var t = e.target.value;
                r(
                        "theme-" + e.target.id,
                        "calc(var(--ar-border-radius) * " + t + ")"
                    ),
                    r("theme-" + e.target.id + "multiplier", t),
                    i.root.style.setProperty(
                        "--ar-" + e.target.id,
                        "calc(var(--ar-border-radius) * " + t + ")"
                    ),
                    b();
            });
        var w = document.getElementById("customizer"),
            x = document.getElementById("customizer-btns");
        e("theme-customizer-btns") && x.classList.remove("d-none"),
            w.addEventListener("change", function(e) {
                r("theme-customizer-btns", !0), x.classList.remove("d-none");
            }),
            document
            .getElementById("customizer-reset-btn")
            .addEventListener("click", function() {
                for (var e = [], r = 0; r < localStorage.length; r++)
                    "theme" == localStorage.key(r).substring(0, 5) &&
                    e.push(localStorage.key(r));
                for (r = 0; r < e.length; r++) localStorage.removeItem(e[r]);
                window.location.reload();
            });
        var P = document.getElementById("copy-styles-btn");
        P.addEventListener("click", function() {
            var e = document.createRange();
            e.selectNode(n),
                window.getSelection().removeAllRanges(),
                window.getSelection().addRange(e),
                navigator.clipboard.writeText(n.innerHTML),
                (this.innerHTML = '<i class="ai-check me-2 ms-n1"></i>Copied!'),
                setTimeout(function() {
                    P.innerHTML = '<i class="ai-copy me-2 ms-n1"></i>Copy styles';
                }, 2e3);
        });
    })();
</script>
