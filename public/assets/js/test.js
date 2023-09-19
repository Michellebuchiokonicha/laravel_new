HotelDatepicker =
        ("object" == typeof exports &&
            "undefined" != typeof module &&
            (module.exports = hljs),
        (function (e) {
            "use strict";
            (n = e),
                (i = Object.create(null)),
                n &&
                    Object.keys(n).forEach(function (e) {
                        var t;
                             "default" !== e &&
                            ((t = Object.getOwnPropertyDescriptor(n, e)),
                            Object.defineProperty(
                                i,
                                e,
                                t.get
                                    ? t
                                    : {
                                          enumerable: !0,
                                          get: function () {
                                              return n[e];
                                          },
                                      }
                            ));
                    }),
                (i.default = n);
            var n,
                i,
                c = Object.freeze(i);
            let t = 0;
            class s {
                constructor(t, e) {
                    (this._boundedEventHandlers = {}), (this.id = s.getNewId());
                    e = e || {};
                    (this.format = e.format || "YYYY-MM-DD"),
                        (this.infoFormat = e.infoFormat || this.format),
                        (this.ariaDayFormat =
                            e.ariaDayFormat || "dddd, MMMM DD, YYYY"),
                        (this.separator = e.separator || " - "),
                        (this.startOfWeek = e.startOfWeek || "sunday"),
                        (this.startDate = e.startDate || new Date()),
                        (this.endDate = e.endDate || !1),
                        (this.minNights = e.minNights || 1),
                        (this.maxNights = e.maxNights || 0),
                        (this.selectForward = e.selectForward || !1),
                        (this.disabledDates = e.disabledDates || []),
                        (this.noCheckInDates = e.noCheckInDates || []),
                        (this.noCheckOutDates = e.noCheckOutDates || []),
                        (this.disabledDaysOfWeek = e.disabledDaysOfWeek || []),
                        (this.noCheckInDaysOfWeek =
                            e.noCheckInDaysOfWeek || []),
                        (this.noCheckOutDaysOfWeek =
                            e.noCheckOutDaysOfWeek || []),
                        (this.enableCheckout = e.enableCheckout || !1),
                        (this.preventContainerClose =
                            e.preventContainerClose || !1),
                        (this.container = e.container || ""),
                        (this.animationSpeed = e.animationSpeed || ".5s"),
                        (this.hoveringTooltip = e.hoveringTooltip || !0),
                        (this.autoClose =
                            void 0 === e.autoClose || e.autoClose),
                        (this.showTopbar =
                            void 0 === e.showTopbar || e.showTopbar),
                        (this.topbarPosition =
                            "bottom" === e.topbarPosition ? "bottom" : "top"),
                        (this.moveBothMonths = e.moveBothMonths || !1),
                        (this.inline = e.inline || !1),
                        (this.clearButton = e.clearButton || !1),
                        (this.submitButton = Boolean(
                            this.inline && e.submitButton
                        )),
                        (this.submitButtonName =
                            this.submitButton && e.submitButtonName
                                ? e.submitButtonName
                                : ""),
                        (this.i18n = e.i18n || {
                            selected: "Stay:",
                            night: "Night",
                            nights: "Nights",
                            button: "Close",
                            clearButton: "Clear",
                            submitButton: "Submit",
                            "checkin-disabled": "Check-in disabled",
                            "checkout-disabled": "Check-out disabled",
                            "day-names-short": [
                                "Sun",
                                "Mon",
                                "Tue",
                                "Wed",
                                "Thu",
                                "Fri",
                                "Sat",
                            ],
                            "day-names": [
                                "Sunday",
                                "Monday",
                                "Tuesday",
                                "Wednesday",
                                "Thursday",
                                "Friday",
                                "Saturday",
                            ],
                            "month-names-short": [
                                "Jan",
                                "Feb",
                                "Mar",
                                "Apr",
                                "May",
                                "Jun",
                                "Jul",
                                "Aug",
                                "Sep",
                                "Oct",
                                "Nov",
                                "Dec",
                            ],
                            "month-names": [
                                "January",
                                "February",
                                "March",
                                "April",
                                "May",
                                "June",
                                "July",
                                "August",
                                "September",
                                "October",
                                "November",
                                "December",
                            ],
                            "error-more":
                                "Date range should not be more than 1 night",
                            "error-more-plural":
                                "Date range should not be more than %d nights",
                            "error-less":
                                "Date range should not be less than 1 night",
                            "error-less-plural":
                                "Date range should not be less than %d nights",
                            "info-more":
                                "Please select a date range of at least 1 night",
                            "info-more-plural":
                                "Please select a date range of at least %d nights",
                            "info-range":
                                "Please select a date range between %d and %d nights",
                            "info-range-equal":
                                "Please select a date range of %d nights",
                            "info-default": "Please select a date range",
                            "aria-application": "Calendar",
                            "aria-selected-checkin":
                                "Selected as check-in date, %s",
                            "aria-selected-checkout":
                                "Selected as check-out date, %s",
                            "aria-selected": "Selected, %s",
                            "aria-disabled": "Not available, %s",
                            "aria-choose-checkin":
                                "Choose %s as your check-in date",
                            "aria-choose-checkout":
                                "Choose %s as your check-out date",
                            "aria-prev-month":
                                "Move backward to switch to the previous month",
                            "aria-next-month":
                                "Move forward to switch to the next month",
                            "aria-close-button": "Close the datepicker",
                            "aria-clear-button": "Clear the selected dates",
                            "aria-submit-button": "Submit the form",
                        }),
                        (this.getValue =
                            e.getValue ||
                            function () {
                                return t.value;
                            }),
                        (this.setValue =
                            e.setValue ||
                            function (e) {
                                t.value = e;
                            }),
                        (this.onDayClick =
                            void 0 !== e.onDayClick && e.onDayClick),
                        (this.onOpenDatepicker =
                            void 0 !== e.onOpenDatepicker &&
                            e.onOpenDatepicker),
                        (this.onSelectRange =
                            void 0 !== e.onSelectRange && e.onSelectRange),
                        (this.extraDayText =
                            void 0 !== e.extraDayText && e.extraDayText),
                        (this.input = t),
                        this.init();
                }
                addBoundedListener(e, t, n, i) {
                    e in this._boundedEventHandlers ||
                        (this._boundedEventHandlers[e] = {}),
                        t in this._boundedEventHandlers[e] ||
                            (this._boundedEventHandlers[e][t] = []);
                    n = n.bind(this);
                    this._boundedEventHandlers[e][t].push([n, i]),
                        e.addEventListener(t, n, i);
                }
                removeAllBoundedListeners(t, n) {
                    if (t in this._boundedEventHandlers) {
                        var e = this._boundedEventHandlers[t];
                        if (n in e) {
                            var i = e[n];
                            for (let e = i.length; e--; ) {
                                var s = i[e];
                                t.removeEventListener(n, s[0], s[1]);
                            }
                        }
                    }
                }
                static getNewId() {
                    return ++t;
                }
                setFechaI18n() {
                    c.setGlobalDateI18n({
                        dayNamesShort: this.i18n["day-names-short"],
                        dayNames: this.i18n["day-names"],
                        monthNamesShort: this.i18n["month-names-short"],
                        monthNames: this.i18n["month-names"],
                    });
                }
                getWeekDayNames() {
                    let t = "";
                    if ("monday" === this.startOfWeek)
                        for (let e = 0; e < 7; e++)
                            t +=
                                '<th class="datepicker__week-name">' +
                                this.lang("day-names-short")[(1 + e) % 7] +
                                "</th>";
                    else
                        for (let e = 0; e < 7; e++)
                            t +=
                                '<th class="datepicker__week-name">' +
                                this.lang("day-names-short")[e] +
                                "</th>";
                    return t;
                }
                getMonthDom(e) {
                    return document.getElementById(this.getMonthTableId(e));
                }
                getMonthName(e) {
                    return this.lang("month-names")[e];
                }
                getDatepickerId() {
                    return "datepicker-" + this.generateId();
                }
                getMonthTableId(e) {
                    return "month-" + e + "-" + this.generateId();
                }
                getCloseButtonId() {
                    return "close-" + this.generateId();
                }
                getClearButtonId() {
                    return "clear-" + this.generateId();
                }
                getSubmitButtonId() {
                    return "submit-" + this.generateId();
                }
                getTooltipId() {
                    return "tooltip-" + this.generateId();
                }
                getNextMonth(e) {
                    e = new Date(e.valueOf());
                    return new Date(e.setMonth(e.getMonth() + 1, 1));
                }
                getPrevMonth(e) {
                    e = new Date(e.valueOf());
                    return new Date(e.setMonth(e.getMonth() - 1, 1));
                }
                getDateString(e) {
                    var t =
                        1 < arguments.length && void 0 !== arguments[1]
                            ? arguments[1]
                            : this.format;
                    return this.setFechaI18n(), c.format(e, t);
                }
                parseDate(e) {
                    var t =
                        1 < arguments.length && void 0 !== arguments[1]
                            ? arguments[1]
                            : this.format;
                    return this.setFechaI18n(), c.parse(e, t);
                }
                init() {
                    (this.parent = this.container || this.input.parentElement),
                        (this.start = !1),
                        (this.end = !1),
                        (this.minDays =
                            1 < this.minNights ? this.minNights + 1 : 2),
                        (this.maxDays =
                            0 < this.maxNights ? this.maxNights + 1 : 0),
                        this.startDate &&
                            "string" == typeof this.startDate &&
                            (this.startDate = this.parseDate(this.startDate)),
                        this.endDate &&
                            "string" == typeof this.endDate &&
                            (this.endDate = this.parseDate(this.endDate)),
                        this.isTouchDevice() && (this.hoveringTooltip = !1),
                        (this.isOpen = !1),
                        (this.changed = !1),
                        (this.justEsc = !1),
                        (this.isOnFocus = !1),
                        this.createDom();
                    let e = new Date();
                    if (
                        (this.startDate &&
                            this.compareMonth(e, this.startDate) < 0 &&
                            (e = new Date(this.startDate.getTime())),
                        this.endDate &&
                            0 <
                                this.compareMonth(
                                    this.getNextMonth(e),
                                    this.endDate
                                ) &&
                            (e = new Date(
                                this.getPrevMonth(this.endDate.getTime())
                            )),
                        0 < this.disabledDates.length &&
                            this.parseDisabledDates(),
                        0 < this.disabledDaysOfWeek.length &&
                            this.getDisabledDays(),
                        this.showMonth(e, 1),
                        this.showMonth(this.getNextMonth(e), 2),
                        this.setDayIndexes(),
                        this.topBarDefaultText(),
                        this.inline &&
                            (this.openDatepicker(), this.submitButton))
                    ) {
                        const e = document.getElementById(
                            this.getSubmitButtonId()
                        );
                        (e.disabled = !0),
                            e.setAttribute("aria-disabled", "true");
                    }
                    if (
                        this.clearButton &&
                        (this.inline || (!this.start && !this.end))
                    ) {
                        const e = document.getElementById(
                            this.getClearButtonId()
                        );
                        (e.disabled = !0),
                            e.setAttribute("aria-disabled", "true");
                    }
                    this.addListeners(),
                        (this.isFirstDisabledDate = 0),
                        (this.lastDisabledDate = !1),
                        this.setDayAriaAttributes();
                }
                addListeners() {
                    var t = this.datepicker.getElementsByClassName(
                        "datepicker__month-button--next"
                    );
                    for (let e = 0; e < t.length; e++)
                        t[e].addEventListener("click", (e) =>
                            this.goToNextMonth(e)
                        );
                    var n = this.datepicker.getElementsByClassName(
                        "datepicker__month-button--prev"
                    );
                    for (let e = 0; e < n.length; e++)
                        n[e].addEventListener("click", (e) =>
                            this.goToPreviousMonth(e)
                        );
                    this.addBoundedListener(this.input, "click", (e) =>
                        this.openDatepicker(e)
                    ),
                        this.showTopbar &&
                            !this.inline &&
                            document
                                .getElementById(this.getCloseButtonId())
                                .addEventListener("click", (e) =>
                                    this.closeDatepicker(e)
                                ),
                        this.showTopbar &&
                            this.clearButton &&
                            document
                                .getElementById(this.getClearButtonId())
                                .addEventListener("click", (e) =>
                                    this.clearDatepicker(e)
                                ),
                        window.addEventListener("resize", (e) =>
                            this.onResizeDatepicker(e)
                        ),
                        this.datepicker.addEventListener("mouseover", (e) =>
                            this.datepickerHover(e)
                        ),
                        this.datepicker.addEventListener("mouseout", (e) =>
                            this.datepickerMouseOut(e)
                        ),
                        this.addBoundedListener(this.input, "change", () =>
                            this.checkAndSetDefaultValue()
                        ),
                        this.inline ||
                            (this.justEsc ||
                                this.addBoundedListener(
                                    this.input,
                                    "focus",
                                    (e) => this.openDatepicker(e)
                                ),
                            (this.justEsc = !1)),
                        window.addEventListener("keydown", (e) =>
                            this.doKeyDown(e)
                        ),
                        document.addEventListener(
                            "focus",
                            (e) => this.checkOnFocus(e),
                            !0
                        );
                }
                generateId() {
                    return this.input.id || this.id;
                }
                createDom() {
                    var e = this.createDatepickerDomString();
                    this.parent.insertAdjacentHTML("beforeend", e),
                        (this.datepicker = document.getElementById(
                            this.getDatepickerId()
                        ));
                }
                createDatepickerDomString() {
                    let e = this.inline ? " datepicker--inline" : "";
                    this.showTopbar &&
                        ("bottom" === this.topbarPosition
                            ? (e += " datepicker--topbar-bottom")
                            : (e += " datepicker--topbar-top")),
                        this.inline ||
                            (e += " datepicker--topbar-has-close-button"),
                        this.clearButton &&
                            (e += " datepicker--topbar-has-clear-button"),
                        this.submitButton &&
                            (e += " datepicker--topbar-has-submit-button");
                    var t = this.inline ? "" : ' style="display:none"';
                    let n =
                            '<div id="' +
                            this.getDatepickerId() +
                            '"' +
                            t +
                            ' class="datepicker datepicker--closed' +
                            e +
                            '">',
                        i = ((n += '<div class="datepicker__inner">'), "");
                    if (this.showTopbar) {
                        i +=
                            '<div class="datepicker__topbar"><div class="datepicker__info datepicker__info--selected"><span class="datepicker__info datepicker__info--selected-label">' +
                            this.lang("selected") +
                            ' </span> <strong class="datepicker__info-text datepicker__info-text--start-day">...</strong> <span class="datepicker__info-text datepicker__info--separator">' +
                            this.separator +
                            '</span> <strong class="datepicker__info-text datepicker__info-text--end-day">...</strong> <em class="datepicker__info-text datepicker__info-text--selected-days">(<span></span>)</em></div><div class="datepicker__info datepicker__info--feedback"></div>';
                        let e = "";
                        this.clearButton &&
                            (e +=
                                '<button type="button" id="' +
                                this.getClearButtonId() +
                                '" class="datepicker__clear-button" aria-label="' +
                                this.i18n["aria-clear-button"] +
                                '">' +
                                this.lang("clearButton") +
                                "</button>"),
                            this.inline ||
                                (e +=
                                    '<button type="button" id="' +
                                    this.getCloseButtonId() +
                                    '" class="datepicker__close-button" aria-label="' +
                                    this.i18n["aria-close-button"] +
                                    '">' +
                                    this.lang("button") +
                                    "</button>"),
                            this.submitButton &&
                                (e +=
                                    '<input type="submit" id="' +
                                    this.getSubmitButtonId() +
                                    '" class="datepicker__submit-button" value="' +
                                    this.lang("submitButton") +
                                    '" name="' +
                                    this.submitButtonName +
                                    '" aria-label="' +
                                    this.i18n["aria-submit-button"] +
                                    '">'),
                            e &&
                                (i +=
                                    '<div class="datepicker__buttons">' +
                                    e +
                                    "</div>"),
                            (i += "</div>");
                    }
                    this.showTopbar &&
                        "top" === this.topbarPosition &&
                        (n += i),
                        (n +=
                            '<div class="datepicker__months" role="application" aria-roledescription="datepicker" aria-label="' +
                            this.i18n["aria-application"] +
                            '">');
                    for (let e = 1; e <= 2; e++)
                        n +=
                            '<table role="presentation" id="' +
                            this.getMonthTableId(e) +
                            '" class="datepicker__month datepicker__month--month' +
                            e +
                            '"><thead><tr class="datepicker__month-caption"><th><span  role="button" tabindex="0" aria-label="' +
                            this.i18n["aria-prev-month"] +
                            '" class="datepicker__month-button datepicker__month-button--prev" month="' +
                            e +
                            '">&lt;</span></th><th colspan="5" class="datepicker__month-name"></th><th><span role="button" tabindex="0" aria-label="' +
                            this.i18n["aria-next-month"] +
                            '" class="datepicker__month-button datepicker__month-button--next" month="' +
                            e +
                            '">&gt;</span></th></tr><tr class="datepicker__week-days"  aria-hidden="true" role="presentation">' +
                            this.getWeekDayNames(e) +
                            "</tr></thead><tbody></tbody></table>";
                    return (
                        (n += "</div>"),
                        this.showTopbar &&
                            "bottom" === this.topbarPosition &&
                            (n += i),
                        (n =
                            (n +=
                                '<div style="display:none" id="' +
                                this.getTooltipId() +
                                '" class="datepicker__tooltip"></div>') +
                            "</div>" +
                            "</div>")
                    );
                }
                showMonth(e, t) {
                    e.setHours(0, 0, 0, 0);
                    var n = this.getMonthName(e.getMonth()),
                        i = this.getMonthDom(t),
                        s = i.getElementsByClassName(
                            "datepicker__month-name"
                        )[0],
                        i = i.getElementsByTagName("tbody")[0];
                    (s.textContent = n + " " + e.getFullYear()),
                        this.emptyElement(i),
                        i.insertAdjacentHTML(
                            "beforeend",
                            this.createMonthDomString(e)
                        ),
                        this.updateSelectableRange(),
                        (this["month" + t] = e);
                }
                createMonthDomString(t) {
                    var s = [];
                    let n,
                        a = "",
                        i = (t.setDate(1), t.getDay());
                    const r = t.getMonth();
                    if (
                        0 <
                        (i = 0 === i && "monday" === this.startOfWeek ? 7 : i)
                    )
                        for (let e = i; 0 < e; e--) {
                            const i = new Date(t.getTime() - 864e5 * e);
                            (n = this.isValidDate(i.getTime())),
                                ((this.startDate &&
                                    this.compareDay(i, this.startDate) < 0) ||
                                    (this.endDate &&
                                        0 <
                                            this.compareDay(
                                                i,
                                                this.endDate
                                            ))) &&
                                    (n = !1),
                                s.push({
                                    date: i,
                                    type: "lastMonth",
                                    day: i.getDate(),
                                    time: i.getTime(),
                                    valid: n,
                                });
                        }
                    for (let e = 0; e < 40; e++) {
                        const i = this.addDays(t, e);
                        (n = this.isValidDate(i.getTime())),
                            ((this.startDate &&
                                this.compareDay(i, this.startDate) < 0) ||
                                (this.endDate &&
                                    0 < this.compareDay(i, this.endDate))) &&
                                (n = !1),
                            s.push({
                                date: i,
                                type:
                                    i.getMonth() === r
                                        ? "visibleMonth"
                                        : "nextMonth",
                                day: i.getDate(),
                                time: i.getTime(),
                                valid: n,
                            });
                    }
                    for (
                        let i = 0;
                        i < 6 && "nextMonth" !== s[7 * i].type;
                        i++
                    ) {
                        a += '<tr class="datepicker__week-row">';
                        for (let n = 0; n < 7; n++) {
                            var o = "monday" === this.startOfWeek ? n + 1 : n,
                                o = s[7 * i + o];
                            const r = this.getDayClasses(o);
                            let e = "";
                            this.hasClass(
                                o,
                                "datepicker__month-day--no-checkin"
                            ) && (e = this.i18n["checkin-disabled"]),
                                this.hasClass(
                                    o,
                                    "datepicker__month-day--no-checkout"
                                ) &&
                                    (e && (e += ". "),
                                    (e += this.i18n["checkout-disabled"]));
                            var l = {
                                daytype: o.type,
                                time: o.time,
                                class: r.join(" "),
                                d: n + 1,
                            };
                            e && (l.title = e),
                                (l.role = "button"),
                                this.getDateString(o.time) ===
                                    this.getDateString(new Date()) &&
                                    (l.tabindex = "0");
                            let t = "";
                            (t =
                                (t = this.extraDayText
                                    ? this.extraDayText(
                                          this.getDateString(o.time),
                                          l
                                      )
                                    : t) || "") &&
                                (l.class =
                                    l.class +
                                    " datepicker__month-day--with-extra"),
                                (a +=
                                    '<td class="' +
                                    l.class +
                                    '" ' +
                                    this.printAttributes(l) +
                                    ">" +
                                    o.day +
                                    t +
                                    "</td>");
                        }
                        a += "</tr>";
                    }
                    return a;
                }
                openDatepicker() {
                    this.isOpen ||
                        (this.removeClass(
                            this.datepicker,
                            "datepicker--closed"
                        ),
                        this.addClass(this.datepicker, "datepicker--open"),
                        this.checkAndSetDefaultValue(),
                        this.inline ||
                            this.slideDown(
                                this.datepicker,
                                this.animationSpeed
                            ),
                        (this.isOpen = !0),
                        this.showSelectedDays(),
                        this.disableNextPrevButtons(),
                        this.addBoundedListener(document, "click", (e) =>
                            this.documentClick(e)
                        ),
                        this.onOpenDatepicker && this.onOpenDatepicker());
                }
                closeDatepicker() {
                    var e;
                    this.isOpen &&
                        !this.inline &&
                        (this.removeClass(this.datepicker, "datepicker--open"),
                        this.addClass(this.datepicker, "datepicker--closed"),
                        this.slideUp(this.datepicker, this.animationSpeed),
                        (this.isOpen = !1),
                        (e = document.createEvent("Event")).initEvent(
                            "afterClose",
                            !0,
                            !0
                        ),
                        this.input.dispatchEvent(e),
                        this.removeAllBoundedListeners(document, "click"));
                }
                autoclose() {
                    this.autoClose &&
                        this.changed &&
                        this.isOpen &&
                        this.start &&
                        this.end &&
                        !this.inline &&
                        this.closeDatepicker();
                }
                documentClick(e) {
                    this.parent.contains(e.target) || e.target === this.input
                        ? "td" === e.target.tagName.toLowerCase() &&
                          this.dayClicked(e.target)
                        : this.preventContainerClose || this.closeDatepicker();
                }
                datepickerHover(e) {
                    e.target.tagName &&
                        "td" === e.target.tagName.toLowerCase() &&
                        this.dayHovering(e.target);
                }
                datepickerMouseOut(e) {
                    e.target.tagName &&
                        "td" === e.target.tagName.toLowerCase() &&
                        (document.getElementById(
                            this.getTooltipId()
                        ).style.display = "none");
                }
                onResizeDatepicker() {
                    this.checkAndSetDefaultValue(!0);
                }
                getDayClasses(e) {
                    const t =
                            this.getDateString(e.time) ===
                            this.getDateString(new Date()),
                        n =
                            this.getDateString(e.time) ===
                            this.getDateString(this.startDate);
                    let i = !1,
                        s = !1,
                        a = !1,
                        r = !1,
                        o = !1,
                        l = !1;
                    if (e.valid || "visibleMonth" === e.type) {
                        const t = this.getDateString(e.time, "YYYY-MM-DD");
                        if (0 < this.disabledDates.length) {
                            const c = this.getClosestDisabledDates(e.date);
                            if (
                                c[0] &&
                                c[1] &&
                                this.compareDay(e.date, c[0]) &&
                                0 < this.countDays(c[0], c[1]) - 2
                            ) {
                                const t = this.countDays(c[1], e.date) - 1,
                                    n = this.countDays(e.date, c[0]) - 1;
                                ((this.selectForward && t < this.minDays) ||
                                    (!this.selectForward &&
                                        t < this.minDays &&
                                        n < this.minDays)) &&
                                    (e.valid = !1),
                                    !e.valid &&
                                        this.enableCheckout &&
                                        2 == t &&
                                        (l = !0);
                            }
                            -1 < this.disabledDates.indexOf(t)
                                ? ((e.valid = !1),
                                  (i = !0),
                                  this.isFirstDisabledDate++,
                                  (this.lastDisabledDate = e.date))
                                : (this.isFirstDisabledDate = 0),
                                e.valid &&
                                    this.lastDisabledDate &&
                                    0 <
                                        this.compareDay(
                                            e.date,
                                            this.lastDisabledDate
                                        ) &&
                                    2 ===
                                        this.countDays(
                                            e.date,
                                            this.lastDisabledDate
                                        ) &&
                                    (o = !0);
                        }
                        0 < this.disabledDaysOfWeek.length &&
                            -1 <
                                this.disabledDaysOfWeek.indexOf(
                                    c.format(e.time, "dddd")
                                ) &&
                            ((e.valid = !1), (r = !0)),
                            0 < this.noCheckInDates.length &&
                                -1 < this.noCheckInDates.indexOf(t) &&
                                ((s = !0), (o = !1)),
                            0 < this.noCheckOutDates.length &&
                                -1 < this.noCheckOutDates.indexOf(t) &&
                                (a = !0),
                            0 < this.noCheckInDaysOfWeek.length &&
                                -1 <
                                    this.noCheckInDaysOfWeek.indexOf(
                                        c.format(e.time, "dddd")
                                    ) &&
                                ((s = !0), (o = !1)),
                            0 < this.noCheckOutDaysOfWeek.length &&
                                -1 <
                                    this.noCheckOutDaysOfWeek.indexOf(
                                        c.format(e.time, "dddd")
                                    ) &&
                                (a = !0);
                    }
                    return [
                        "datepicker__month-day",
                        "datepicker__month-day--" + e.type,
                        "datepicker__month-day--" +
                            (e.valid ? "valid" : "invalid"),
                        t ? "datepicker__month-day--today" : "",
                        i ? "datepicker__month-day--disabled" : "",
                        i &&
                        this.enableCheckout &&
                        1 === this.isFirstDisabledDate
                            ? "datepicker__month-day--checkout-enabled"
                            : "",
                        l ? "datepicker__month-day--before-disabled-date" : "",
                        n || o ? "datepicker__month-day--checkin-only" : "",
                        s ? "datepicker__month-day--no-checkin" : "",
                        a ? "datepicker__month-day--no-checkout" : "",
                        r ? "datepicker__month-day--day-of-week-disabled" : "",
                    ];
                }
                checkAndSetDayClasses() {
                    var n = this.datepicker.getElementsByTagName("td");
                    for (let t = 0; t < n.length; t++) {
                        var i = parseInt(n[t].getAttribute("time"), 10),
                            s = new Date(i),
                            a = n[t].getAttribute("daytype");
                        let e;
                        (e = this.isValidDate(s.getTime())),
                            ((this.startDate &&
                                this.compareDay(s, this.startDate) < 0) ||
                                (this.endDate &&
                                    0 < this.compareDay(s, this.endDate))) &&
                                (e = !1);
                        (a = {
                            date: s,
                            type: a,
                            day: s.getDate(),
                            time: i,
                            valid: e,
                        }),
                            (s = this.getDayClasses(a));
                        n[t].className = s.join(" ");
                    }
                }
                checkAndSetDefaultValue() {
                    var e =
                        0 < arguments.length &&
                        void 0 !== arguments[0] &&
                        arguments[0];
                    const t = this.getValue(),
                        n = t ? t.split(this.separator) : "";
                    if (n && 2 <= n.length) {
                        const t = this.format;
                        (this.changed = !1),
                            this.setDateRange(
                                this.parseDate(n[0], t),
                                this.parseDate(n[1], t),
                                e
                            ),
                            (this.changed = !0);
                    } else if (
                        this.showTopbar &&
                        ((this.datepicker.getElementsByClassName(
                            "datepicker__info--selected"
                        )[0].style.display = "none"),
                        e)
                    ) {
                        let e = new Date();
                        this.startDate &&
                            this.compareMonth(e, this.startDate) < 0 &&
                            (e = new Date(this.startDate.getTime())),
                            this.endDate &&
                                0 <
                                    this.compareMonth(
                                        this.getNextMonth(e),
                                        this.endDate
                                    ) &&
                                (e = new Date(
                                    this.getPrevMonth(this.endDate.getTime())
                                )),
                            this.start && !this.end && this.clearSelection(),
                            this.showMonth(e, 1),
                            this.showMonth(this.getNextMonth(e), 2),
                            this.setDayIndexes();
                    }
                }
                setDateRange(e, t) {
                    var n,
                        i =
                            2 < arguments.length &&
                            void 0 !== arguments[2] &&
                            arguments[2];
                    e.getTime() > t.getTime() &&
                        ((n = t), (t = e), (e = n), (n = null));
                    let s = !0;
                    (s =
                        !(
                            (this.startDate &&
                                this.compareDay(e, this.startDate) < 0) ||
                            (this.endDate &&
                                0 < this.compareDay(t, this.endDate))
                        ) && s)
                        ? (e.setTime(e.getTime() + 432e5),
                          t.setTime(t.getTime() + 432e5),
                          (this.start = e.getTime()),
                          (this.end = t.getTime()),
                          0 < this.compareDay(e, t) &&
                              0 === this.compareMonth(e, t) &&
                              (t = this.getNextMonth(e)),
                          0 === this.compareMonth(e, t) &&
                              (t = this.getNextMonth(e)),
                          this.showMonth(e, 1),
                          this.showMonth(t, 2),
                          this.setDayIndexes(),
                          this.showSelectedDays(),
                          this.disableNextPrevButtons(),
                          this.checkSelection(),
                          this.showSelectedInfo(),
                          i || this.autoclose(),
                          this.setDayAriaAttributes())
                        : (this.showMonth(this.startDate, 1),
                          this.showMonth(this.getNextMonth(this.startDate), 2),
                          this.setDayIndexes(),
                          this.showSelectedDays(),
                          this.disableNextPrevButtons());
                }
                showSelectedDays() {
                    if (this.start || this.end) {
                        var t = this.datepicker.getElementsByTagName("td");
                        for (let e = 0; e < t.length; e++) {
                            var n = parseInt(t[e].getAttribute("time"), 10);
                            (this.start &&
                                this.end &&
                                this.end >= n &&
                                this.start <= n) ||
                            (this.start &&
                                !this.end &&
                                this.getDateString(this.start, "YYYY-MM-DD") ===
                                    this.getDateString(n, "YYYY-MM-DD"))
                                ? this.addClass(
                                      t[e],
                                      "datepicker__month-day--selected"
                                  )
                                : this.removeClass(
                                      t[e],
                                      "datepicker__month-day--selected"
                                  ),
                                this.start &&
                                this.getDateString(this.start, "YYYY-MM-DD") ===
                                    this.getDateString(n, "YYYY-MM-DD")
                                    ? this.addClass(
                                          t[e],
                                          "datepicker__month-day--first-day-selected"
                                      )
                                    : this.removeClass(
                                          t[e],
                                          "datepicker__month-day--first-day-selected"
                                      ),
                                this.end &&
                                this.getDateString(this.end, "YYYY-MM-DD") ===
                                    this.getDateString(n, "YYYY-MM-DD")
                                    ? this.addClass(
                                          t[e],
                                          "datepicker__month-day--last-day-selected"
                                      )
                                    : this.removeClass(
                                          t[e],
                                          "datepicker__month-day--last-day-selected"
                                      );
                        }
                    }
                }
                showSelectedInfo() {
                    if (this.showTopbar) {
                        const e = this.datepicker.getElementsByClassName(
                                "datepicker__info--selected"
                            )[0],
                            t = e.getElementsByClassName(
                                "datepicker__info-text--start-day"
                            )[0],
                            n = e.getElementsByClassName(
                                "datepicker__info-text--end-day"
                            )[0],
                            i = e.getElementsByClassName(
                                "datepicker__info-text--selected-days"
                            )[0],
                            s = document.getElementById(
                                this.getCloseButtonId()
                            ),
                            a = document.getElementById(
                                this.getClearButtonId()
                            ),
                            r = document.getElementById(
                                this.getSubmitButtonId()
                            );
                        if (
                            ((t.textContent = "..."),
                            (n.textContent = "..."),
                            (i.style.display = "none"),
                            this.start &&
                                ((e.style.display = ""),
                                (t.textContent = this.getDateString(
                                    new Date(parseInt(this.start, 10)),
                                    this.infoFormat
                                )),
                                this.clearButton) &&
                                ((a.disabled = !1),
                                a.setAttribute("aria-disabled", "false")),
                            this.end &&
                                (n.textContent = this.getDateString(
                                    new Date(parseInt(this.end, 10)),
                                    this.infoFormat
                                )),
                            this.start && this.end)
                        ) {
                            const e = this.countDays(this.end, this.start) - 1,
                                t =
                                    1 == e
                                        ? e + " " + this.lang("night")
                                        : e + " " + this.lang("nights"),
                                n =
                                    this.getDateString(new Date(this.start)) +
                                    this.separator +
                                    this.getDateString(new Date(this.end));
                            (i.style.display = ""),
                                (i.firstElementChild.textContent = t),
                                this.inline
                                    ? this.submitButton &&
                                      ((r.disabled = !1),
                                      r.setAttribute("aria-disabled", "false"))
                                    : ((s.disabled = !1),
                                      s.setAttribute("aria-disabled", "false")),
                                this.setValue(
                                    n,
                                    this.getDateString(new Date(this.start)),
                                    this.getDateString(new Date(this.end))
                                ),
                                (this.changed = !0);
                        } else
                            this.inline
                                ? this.submitButton &&
                                  ((r.disabled = !0),
                                  r.setAttribute("aria-disabled", "true"))
                                : ((s.disabled = !0),
                                  s.setAttribute("aria-disabled", "true"));
                        !this.clearButton ||
                            this.start ||
                            this.end ||
                            ((a.disabled = !0),
                            a.setAttribute("aria-disabled", "true"));
                    } else if (this.start && this.end) {
                        const e =
                            this.getDateString(new Date(this.start)) +
                            this.separator +
                            this.getDateString(new Date(this.end));
                        this.setValue(
                            e,
                            this.getDateString(new Date(this.start)),
                            this.getDateString(new Date(this.end))
                        ),
                            (this.changed = !0);
                    }
                }
                dayClicked(e) {
                    if (!this.hasClass(e, "datepicker__month-day--invalid")) {
                        const t =
                                (this.start && this.end) ||
                                (!this.start && !this.end),
                            n = parseInt(e.getAttribute("time"), 10);
                        if (t) {
                            if (
                                this.hasClass(
                                    e,
                                    "datepicker__month-day--no-checkin"
                                )
                            )
                                return;
                        } else if (this.start) {
                            if (
                                this.start > n &&
                                this.hasClass(
                                    e,
                                    "datepicker__month-day--no-checkin"
                                )
                            )
                                return;
                            const t = this.datepicker.querySelectorAll(
                                'td[time="' + this.start + '"]'
                            )[0];
                            if (
                                t &&
                                this.hasClass(
                                    t,
                                    "datepicker__month-day--no-checkout"
                                ) &&
                                this.start > n
                            )
                                return;
                            if (
                                this.hasClass(
                                    e,
                                    "datepicker__month-day--no-checkout"
                                ) &&
                                n > this.start
                            )
                                return;
                        }
                        if (
                            (this.addClass(
                                e,
                                "datepicker__month-day--selected"
                            ),
                            t
                                ? ((this.start = n), (this.end = !1))
                                : this.start && (this.end = n),
                            this.start && this.end && this.start > this.end)
                        ) {
                            const e = this.end;
                            (this.end = this.start), (this.start = e);
                        }
                        (this.start = parseInt(this.start, 10)),
                            (this.end = parseInt(this.end, 10)),
                            this.clearHovering(),
                            this.start && !this.end && this.dayHovering(e),
                            this.updateSelectableRange(),
                            this.checkSelection(),
                            this.showSelectedInfo(),
                            this.start &&
                                this.end &&
                                this.checkAndSetDayClasses(),
                            this.showSelectedDays(),
                            this.autoclose(),
                            this.onDayClick && this.onDayClick(),
                            this.end &&
                                this.onSelectRange &&
                                this.onSelectRange(),
                            this.setDayAriaAttributes();
                    }
                }
                isValidDate(e) {
                    if (
                        ((e = parseInt(e, 10)),
                        (this.startDate &&
                            this.compareDay(e, this.startDate) < 0) ||
                            (this.endDate &&
                                0 < this.compareDay(e, this.endDate)))
                    )
                        return !1;
                    if (this.start && !this.end) {
                        if (
                            (0 < this.maxDays &&
                                this.countDays(e, this.start) > this.maxDays) ||
                            (0 < this.minDays &&
                                1 < this.countDays(e, this.start) &&
                                this.countDays(e, this.start) < this.minDays)
                        )
                            return !1;
                        if (this.selectForward && e < this.start) return !1;
                        if (0 < this.disabledDates.length) {
                            var t = this.getClosestDisabledDates(
                                new Date(parseInt(this.start, 10))
                            );
                            if (t[0] && this.compareDay(e, t[0]) <= 0)
                                return !1;
                            if (t[1] && 0 <= this.compareDay(e, t[1]))
                                return !1;
                        }
                        if (0 < this.disabledDaysOfWeek.length) {
                            t = this.getClosestDisabledDays(
                                new Date(parseInt(this.start, 10))
                            );
                            if (t[0] && this.compareDay(e, t[0]) <= 0)
                                return !1;
                            if (t[1] && 0 <= this.compareDay(e, t[1]))
                                return !1;
                        }
                    }
                    return !0;
                }
                checkSelection() {
                    const t = this.countDays(this.end, this.start),
                        e =
                            !!this.showTopbar &&
                            this.datepicker.getElementsByClassName(
                                "datepicker__info--feedback"
                            )[0];
                    if (this.maxDays && t > this.maxDays) {
                        (this.start = !1), (this.end = !1);
                        const t = this.datepicker.getElementsByTagName("td");
                        for (let e = 0; e < t.length; e++)
                            this.removeClass(
                                t[e],
                                "datepicker__month-day--selected"
                            ),
                                this.removeClass(
                                    t[e],
                                    "datepicker__month-day--first-day-selected"
                                ),
                                this.removeClass(
                                    t[e],
                                    "datepicker__month-day--last-day-selected"
                                );
                        if (this.showTopbar) {
                            const t = this.maxDays - 1;
                            this.topBarErrorText(e, "error-more", t);
                        }
                    } else if (this.minDays && t < this.minDays) {
                        (this.start = !1), (this.end = !1);
                        const t = this.datepicker.getElementsByTagName("td");
                        for (let e = 0; e < t.length; e++)
                            this.removeClass(
                                t[e],
                                "datepicker__month-day--selected"
                            ),
                                this.removeClass(
                                    t[e],
                                    "datepicker__month-day--first-day-selected"
                                ),
                                this.removeClass(
                                    t[e],
                                    "datepicker__month-day--last-day-selected"
                                );
                        if (this.showTopbar) {
                            const t = this.minDays - 1;
                            this.topBarErrorText(e, "error-less", t);
                        }
                    } else
                        this.start || this.end
                            ? this.showTopbar &&
                              (this.removeClass(e, "datepicker__info--error"),
                              this.removeClass(e, "datepicker__info--help"))
                            : this.showTopbar &&
                              (this.removeClass(e, "datepicker__info--error"),
                              this.addClass(e, "datepicker__info--help"));
                }
                addDays(e, t) {
                    e = new Date(e);
                    return e.setDate(e.getDate() + t), e;
                }
                substractDays(e, t) {
                    e = new Date(e);
                    return e.setDate(e.getDate() - t), e;
                }
                countDays(e, t) {
                    return (
                        Math.abs(this.daysFrom1970(e) - this.daysFrom1970(t)) +
                        1
                    );
                }
                compareDay(e, t) {
                    e =
                        parseInt(this.getDateString(e, "YYYYMMDD"), 10) -
                        parseInt(this.getDateString(t, "YYYYMMDD"), 10);
                    return 0 < e ? 1 : 0 == e ? 0 : -1;
                }
                compareMonth(e, t) {
                    e =
                        parseInt(this.getDateString(e, "YYYYMM"), 10) -
                        parseInt(this.getDateString(t, "YYYYMM"), 10);
                    return 0 < e ? 1 : 0 == e ? 0 : -1;
                }
                daysFrom1970(e) {
                    return Math.round(this.toLocalTimestamp(e) / 864e5);
                }
                toLocalTimestamp(e) {
                    return (
                        "string" !=
                            typeof (e =
                                "object" == typeof e && e.getTime
                                    ? e.getTime()
                                    : e) ||
                            e.match(/\d{13}/) ||
                            (e = this.parseDate(e).getTime()),
                        parseInt(e, 10) -
                            60 * new Date().getTimezoneOffset() * 1e3
                    );
                }
                printAttributes(e) {
                    var t = e;
                    let n = "";
                    for (const i in e)
                        Object.prototype.hasOwnProperty.call(t, i) &&
                            (n += i + '="' + t[i] + '" ');
                    return n;
                }
                goToNextMonth(e) {
                    var t =
                            1 < arguments.length &&
                            void 0 !== arguments[1] &&
                            arguments[1],
                        e = Number.isInteger(e)
                            ? e
                            : e.target.getAttribute("month"),
                        n = 1 < e,
                        i = n ? this.month2 : this.month1,
                        i = this.getNextMonth(i);
                    return !(
                        (!this.isSingleMonth() &&
                            !n &&
                            0 <= this.compareMonth(i, this.month2)) ||
                        this.isMonthOutOfRange(i) ||
                        ((this.moveBothMonths || t) &&
                            n &&
                            this.showMonth(this.month2, 1),
                        this.showMonth(i, e),
                        this.setDayIndexes(),
                        this.showSelectedDays(),
                        this.disableNextPrevButtons(),
                        0)
                    );
                }
                goToPreviousMonth(e) {
                    var t =
                            1 < arguments.length &&
                            void 0 !== arguments[1] &&
                            arguments[1],
                        e = Number.isInteger(e)
                            ? e
                            : e.target.getAttribute("month"),
                        n = 1 < e,
                        i = n ? this.month2 : this.month1,
                        i = this.getPrevMonth(i);
                    return !(
                        (n && this.compareMonth(i, this.month1) <= 0) ||
                        this.isMonthOutOfRange(i) ||
                        ((!this.moveBothMonths && !t) ||
                            n ||
                            this.showMonth(this.month1, 2),
                        this.showMonth(i, e),
                        this.setDayIndexes(),
                        this.showSelectedDays(),
                        this.disableNextPrevButtons(),
                        0)
                    );
                }
                isSingleMonth() {
                    return !this.isVisible(this.getMonthDom(2));
                }
                isMonthOutOfRange(e) {
                    e = new Date(e.valueOf());
                    return !!(
                        (this.startDate &&
                            new Date(
                                e.getFullYear(),
                                e.getMonth() + 1,
                                0,
                                23,
                                59,
                                59
                            ) < this.startDate) ||
                        (this.endDate &&
                            new Date(e.getFullYear(), e.getMonth(), 1) >
                                this.endDate)
                    );
                }
                disableNextPrevButtons() {
                    var e, t, n;
                    this.isSingleMonth() ||
                        ((e = parseInt(
                            this.getDateString(this.month1, "YYYYMM"),
                            10
                        )),
                        (t = parseInt(
                            this.getDateString(this.month2, "YYYYMM"),
                            10
                        )),
                        (e = Math.abs(e - t)),
                        (t = this.datepicker.getElementsByClassName(
                            "datepicker__month-button--next"
                        )),
                        (n = this.datepicker.getElementsByClassName(
                            "datepicker__month-button--prev"
                        )),
                        1 < e && 89 !== e
                            ? (this.removeClass(
                                  t[0],
                                  "datepicker__month-button--disabled"
                              ),
                              t[0].setAttribute("aria-disabled", "false"),
                              this.removeClass(
                                  n[1],
                                  "datepicker__month-button--disabled"
                              ),
                              n[1].setAttribute("aria-disabled", "false"))
                            : (this.addClass(
                                  t[0],
                                  "datepicker__month-button--disabled"
                              ),
                              t[0].setAttribute("aria-disabled", "true"),
                              this.addClass(
                                  n[1],
                                  "datepicker__month-button--disabled"
                              ),
                              n[1].setAttribute("aria-disabled", "true")),
                        this.isMonthOutOfRange(this.getPrevMonth(this.month1))
                            ? (this.addClass(
                                  n[0],
                                  "datepicker__month-button--disabled"
                              ),
                              n[0].setAttribute("aria-disabled", "true"))
                            : (this.removeClass(
                                  n[0],
                                  "datepicker__month-button--disabled"
                              ),
                              n[0].setAttribute("aria-disabled", "false")),
                        this.isMonthOutOfRange(this.getNextMonth(this.month2))
                            ? (this.addClass(
                                  t[1],
                                  "datepicker__month-button--disabled"
                              ),
                              t[1].setAttribute("aria-disabled", "true"))
                            : (this.removeClass(
                                  t[1],
                                  "datepicker__month-button--disabled"
                              ),
                              t[1].setAttribute("aria-disabled", "false")));
                }
                topBarDefaultText() {
                    if (this.showTopbar) {
                        let e = "";
                        e =
                            this.minDays && this.maxDays
                                ? this.minDays === this.maxDays
                                    ? this.lang("info-range-equal")
                                    : this.lang("info-range")
                                : this.minDays && 2 < this.minDays
                                ? this.lang("info-more-plural")
                                : this.minDays
                                ? this.lang("info-more")
                                : this.lang("info-default");
                        var t = this.datepicker.getElementsByClassName(
                            "datepicker__info--feedback"
                        )[0];
                        (e = e
                            .replace(/%d/, this.minDays - 1)
                            .replace(/%d/, this.maxDays - 1)),
                            this.addClass(t, "datepicker__info--help"),
                            this.removeClass(t, "datepicker__info--error"),
                            (t.textContent = e);
                    }
                }
                topBarErrorText(e, t, n) {
                    this.showTopbar &&
                        (this.addClass(e, "datepicker__info--error"),
                        this.removeClass(e, "datepicker__info--help"),
                        1 < n
                            ? ((t = (t = this.lang(t + "-plural")).replace(
                                  "%d",
                                  n
                              )),
                              (e.textContent = t))
                            : (t = this.lang(t)),
                        (this.datepicker.getElementsByClassName(
                            "datepicker__info--selected"
                        )[0].style.display = "none"));
                }
                updateSelectableRange() {
                    const t = this.datepicker.getElementsByTagName("td"),
                        n = this.start && !this.end;
                    for (let e = 0; e < t.length; e++)
                        if (
                            (this.hasClass(
                                t[e],
                                "datepicker__month-day--invalid"
                            ) &&
                                this.hasClass(
                                    t[e],
                                    "datepicker__month-day--tmp"
                                ) &&
                                (this.removeClass(
                                    t[e],
                                    "datepicker__month-day--tmp"
                                ),
                                this.hasClass(
                                    t[e],
                                    "datepicker__month-day--tmpinvalid"
                                )
                                    ? this.removeClass(
                                          t[e],
                                          "datepicker__month-day--tmpinvalid"
                                      )
                                    : (this.removeClass(
                                          t[e],
                                          "datepicker__month-day--invalid"
                                      ),
                                      this.addClass(
                                          t[e],
                                          "datepicker__month-day--valid"
                                      ))),
                            n)
                        ) {
                            if (
                                this.hasClass(
                                    t[e],
                                    "datepicker__month-day--visibleMonth"
                                ) &&
                                (this.hasClass(
                                    t[e],
                                    "datepicker__month-day--valid"
                                ) ||
                                    this.hasClass(
                                        t[e],
                                        "datepicker__month-day--disabled"
                                    ) ||
                                    this.hasClass(
                                        t[e],
                                        "datepicker__month-day--before-disabled-date"
                                    ))
                            ) {
                                const n = parseInt(
                                    t[e].getAttribute("time"),
                                    10
                                );
                                this.isValidDate(n)
                                    ? (this.addClass(
                                          t[e],
                                          "datepicker__month-day--valid"
                                      ),
                                      this.addClass(
                                          t[e],
                                          "datepicker__month-day--tmp"
                                      ),
                                      this.removeClass(
                                          t[e],
                                          "datepicker__month-day--invalid"
                                      ),
                                      this.removeClass(
                                          t[e],
                                          "datepicker__month-day--disabled"
                                      ))
                                    : (this.hasClass(
                                          t[e],
                                          "datepicker__month-day--invalid"
                                      ) &&
                                          this.addClass(
                                              t[e],
                                              "datepicker__month-day--tmpinvalid"
                                          ),
                                      this.addClass(
                                          t[e],
                                          "datepicker__month-day--invalid"
                                      ),
                                      this.addClass(
                                          t[e],
                                          "datepicker__month-day--tmp"
                                      ),
                                      this.removeClass(
                                          t[e],
                                          "datepicker__month-day--valid"
                                      ));
                            }
                            this.setDayAriaAttributes();
                        } else
                            (this.hasClass(
                                t[e],
                                "datepicker__month-day--checkout-enabled"
                            ) ||
                                this.hasClass(
                                    t[e],
                                    "datepicker__month-day--before-disabled-date"
                                )) &&
                                (this.addClass(
                                    t[e],
                                    "datepicker__month-day--invalid"
                                ),
                                this.removeClass(
                                    t[e],
                                    "datepicker__month-day--valid"
                                ),
                                this.hasClass(
                                    t[e],
                                    "datepicker__month-day--before-disabled-date"
                                ) ||
                                    this.addClass(
                                        t[e],
                                        "datepicker__month-day--disabled"
                                    ));
                    return !0;
                }
                dayHovering(n) {
                    const i = parseInt(n.getAttribute("time"), 10);
                    let s = "";
                    if (!this.hasClass(n, "datepicker__month-day--invalid")) {
                        const n = this.datepicker.getElementsByTagName("td");
                        for (let e = 0; e < n.length; e++) {
                            var t = parseInt(n[e].getAttribute("time"), 10);
                            t === i
                                ? this.addClass(
                                      n[e],
                                      "datepicker__month-day--hovering"
                                  )
                                : this.removeClass(
                                      n[e],
                                      "datepicker__month-day--hovering"
                                  ),
                                this.start &&
                                !this.end &&
                                ((this.start < t && i >= t) ||
                                    (this.start > t && i <= t))
                                    ? this.addClass(
                                          n[e],
                                          "datepicker__month-day--hovering"
                                      )
                                    : this.removeClass(
                                          n[e],
                                          "datepicker__month-day--hovering"
                                      );
                        }
                        if (this.start && !this.end) {
                            const n = this.countDays(i, this.start) - 1;
                            this.hoveringTooltip &&
                                ("function" == typeof this.hoveringTooltip
                                    ? (s = this.hoveringTooltip(
                                          n,
                                          this.start,
                                          i
                                      ))
                                    : !0 === this.hoveringTooltip &&
                                      0 < n &&
                                      (s =
                                          n +
                                          " " +
                                          (1 == n
                                              ? this.lang("night")
                                              : this.lang("nights"))));
                        }
                    }
                    if (s) {
                        const i = n.getBoundingClientRect(),
                            r = this.datepicker.getBoundingClientRect();
                        let e = i.left - r.left,
                            t = i.top - r.top;
                        e += i.width / 2;
                        const o = document.getElementById(this.getTooltipId());
                        (o.style.display = ""), (o.textContent = s);
                        var n = o.getBoundingClientRect().width,
                            a = o.getBoundingClientRect().height;
                        (e -= n / 2),
                            (t -= a),
                            setTimeout(() => {
                                (o.style.left = e + "px"),
                                    (o.style.top = t + "px");
                            }, 10);
                    } else
                        document.getElementById(
                            this.getTooltipId()
                        ).style.display = "none";
                }
                clearHovering() {
                    var t = this.datepicker.getElementsByTagName("td");
                    for (let e = 0; e < t.length; e++)
                        this.removeClass(
                            t[e],
                            "datepicker__month-day--hovering"
                        );
                    document.getElementById(this.getTooltipId()).style.display =
                        "none";
                }
                clearSelection() {
                    (this.start = !1), (this.end = !1);
                    var t = this.datepicker.getElementsByTagName("td");
                    for (let e = 0; e < t.length; e++)
                        this.removeClass(
                            t[e],
                            "datepicker__month-day--selected"
                        ),
                            this.removeClass(
                                t[e],
                                "datepicker__month-day--first-day-selected"
                            ),
                            this.removeClass(
                                t[e],
                                "datepicker__month-day--last-day-selected"
                            ),
                            this.removeClass(
                                t[e],
                                "datepicker__month-day--hovering"
                            );
                    this.setValue(""),
                        this.checkSelection(),
                        this.showSelectedInfo(),
                        this.showSelectedDays();
                }
                clearDatepicker() {
                    (this.start = !1), (this.end = !1);
                    var t = this.datepicker.getElementsByTagName("td");
                    for (let e = 0; e < t.length; e++)
                        this.removeClass(
                            t[e],
                            "datepicker__month-day--selected"
                        ),
                            this.removeClass(
                                t[e],
                                "datepicker__month-day--first-day-selected"
                            ),
                            this.removeClass(
                                t[e],
                                "datepicker__month-day--last-day-selected"
                            ),
                            this.removeClass(
                                t[e],
                                "datepicker__month-day--hovering"
                            );
                    this.setValue(""),
                        this.checkSelection(),
                        this.showSelectedInfo(),
                        (this.datepicker.getElementsByClassName(
                            "datepicker__info--selected"
                        )[0].style.display = "none"),
                        this.showSelectedDays(),
                        this.updateSelectableRange();
                }
                parseDisabledDates() {
                    var t = [];
                    this.setFechaI18n();
                    for (let e = 0; e < this.disabledDates.length; e++)
                        t[e] = c.parse(this.disabledDates[e], "YYYY-MM-DD");
                    t.sort((e, t) => e - t), (this.disabledDatesTime = t);
                }
                getClosestDisabledDates(r) {
                    let o = [!1, !1];
                    if (r < this.disabledDatesTime[0])
                        o = this.enableCheckout
                            ? [!1, this.addDays(this.disabledDatesTime[0], 1)]
                            : [!1, this.disabledDatesTime[0]];
                    else if (
                        r >
                        this.disabledDatesTime[
                            this.disabledDatesTime.length - 1
                        ]
                    )
                        o = [
                            this.disabledDatesTime[
                                this.disabledDatesTime.length - 1
                            ],
                            !1,
                        ];
                    else {
                        let e = this.disabledDatesTime.length,
                            t = this.disabledDatesTime.length;
                        var l = Math.abs(new Date(0, 0, 0).valueOf());
                        let n,
                            i = l,
                            s = -l,
                            a;
                        for (n = 0; n < this.disabledDatesTime.length; ++n)
                            (a = r - this.disabledDatesTime[n]) < 0 &&
                                a > s &&
                                ((t = n), (s = a)),
                                0 < a && a < i && ((e = n), (i = a));
                        this.disabledDatesTime[e] &&
                            (o[0] = this.disabledDatesTime[e]),
                            void 0 === this.disabledDatesTime[e]
                                ? (o[1] = !1)
                                : this.enableCheckout
                                ? (o[1] = this.addDays(
                                      this.disabledDatesTime[t],
                                      1
                                  ))
                                : (o[1] = this.disabledDatesTime[t]);
                    }
                    return o;
                }
                getDisabledDays() {
                    var t = [],
                        n = [],
                        i = new Date();
                    for (let e = 0; e < 7; e++) {
                        var s = this.addDays(i, e);
                        t[c.format(s, "d")] = c.format(s, "dddd");
                    }
                    for (let e = 0; e < this.disabledDaysOfWeek.length; e++)
                        n.push(t.indexOf(this.disabledDaysOfWeek[e]));
                    n.sort(), (this.disabledDaysIndexes = n);
                }
                getClosestDisabledDays(t) {
                    var n = [!1, !1];
                    for (let e = 0; e < 7; e++) {
                        var i = this.substractDays(t, e);
                        if (
                            -1 <
                            this.disabledDaysIndexes.indexOf(
                                parseInt(c.format(i, "d"), 10)
                            )
                        ) {
                            n[0] = i;
                            break;
                        }
                    }
                    for (let e = 0; e < 7; e++) {
                        var s = this.addDays(t, e);
                        if (
                            -1 <
                            this.disabledDaysIndexes.indexOf(
                                parseInt(c.format(s, "d"), 10)
                            )
                        ) {
                            n[1] = s;
                            break;
                        }
                    }
                    return n;
                }
                lang(e) {
                    return e in this.i18n ? this.i18n[e] : "";
                }
                emptyElement(e) {
                    for (; e.firstChild; ) e.removeChild(e.firstChild);
                }
                classRegex(e) {
                    return new RegExp("(^|\\s+)" + e + "(\\s+|$)");
                }
                hasClass(e, t) {
                    return this.classRegex(t).test(e.className);
                }
                addClass(e, t) {
                    this.hasClass(e, t) ||
                        (e.className = e.className + " " + t);
                }
                removeClass(e, t) {
                    e.className = e.className.replace(this.classRegex(t), " ");
                }
                isVisible(e) {
                    return (
                        e.offsetWidth ||
                        e.offsetHeight ||
                        e.getClientRects().length
                    );
                }
                slideDown(e, t) {
                    e.style.display = "";
                    var n = e.getBoundingClientRect().height;
                    (e.style.height = 0),
                        this.recalc(e.offsetHeight),
                        (e.style.transition = "height " + t),
                        (e.style.height = n + "px"),
                        e.addEventListener("transitionend", () => {
                            e.style.height =
                                e.style.transition =
                                e.style.display =
                                    "";
                        });
                }
                slideUp(e, t) {
                    var n = e.getBoundingClientRect().height;
                    (e.style.height = n + "px"),
                        this.recalc(e.offsetHeight),
                        (e.style.transition = "height " + t),
                        (e.style.height = 0),
                        e.addEventListener("transitionend", () => {
                            e.style.display = "none";
                        });
                }
                recalc(e) {
                    return e.offsetHeight;
                }
                isTouchDevice() {
                    return (
                        "ontouchstart" in window ||
                        (window.DocumentTouch &&
                            document instanceof DocumentTouch)
                    );
                }
                setDayAriaAttributes() {
                    var i = this.datepicker.getElementsByTagName("td");
                    for (let n = 0; n < i.length; n++) {
                        var s = i[n].className,
                            a = parseInt(i[n].getAttribute("time"), 10);
                        let e = "false",
                            t = "";
                        s.includes("datepicker__month-day--invalid")
                            ? ((t = this.replacei18n(
                                  this.i18n["aria-disabled"],
                                  c.format(a, this.ariaDayFormat)
                              )),
                              (e = "true"))
                            : (t = s.includes(
                                  "datepicker__month-day--first-day-selected"
                              )
                                  ? this.replacei18n(
                                        this.i18n["aria-selected-checkin"],
                                        c.format(a, this.ariaDayFormat)
                                    )
                                  : s.includes(
                                        "datepicker__month-day--last-day-selected"
                                    )
                                  ? this.replacei18n(
                                        this.i18n["aria-selected-checkout"],
                                        c.format(a, this.ariaDayFormat)
                                    )
                                  : s.includes(
                                        "datepicker__month-day--selected"
                                    )
                                  ? this.replacei18n(
                                        this.i18n["aria-selected"],
                                        c.format(a, this.ariaDayFormat)
                                    )
                                  : this.start && !this.end
                                  ? this.replacei18n(
                                        this.i18n["aria-choose-checkout"],
                                        c.format(a, this.ariaDayFormat)
                                    )
                                  : this.replacei18n(
                                        this.i18n["aria-choose-checkin"],
                                        c.format(a, this.ariaDayFormat)
                                    )),
                            t && i[n].setAttribute("aria-label", t),
                            i[n].setAttribute("aria-disabled", e);
                    }
                }
                replacei18n(e, t) {
                    return e.replace("%s", t);
                }
                checkOnFocus(e) {
                    (e.target && this.input === e.target) ||
                    this.datepicker.contains(e.target)
                        ? (this.isOnFocus = !0)
                        : ((this.isOnFocus = !1),
                          this.isOpen && this.closeDatepicker());
                }
                doKeyDown(e) {
                    switch (e.keyCode) {
                        case 39:
                            this.isOnFocus &&
                                (e.preventDefault(), this.setActiveDay("next"));
                            break;
                        case 37:
                            this.isOnFocus &&
                                (e.preventDefault(), this.setActiveDay("prev"));
                            break;
                        case 40:
                            this.isOnFocus &&
                                (e.preventDefault(), this.setActiveDay("down"));
                            break;
                        case 38:
                            this.isOnFocus &&
                                (e.preventDefault(), this.setActiveDay("up"));
                            break;
                        case 36:
                            this.isOnFocus &&
                                (e.preventDefault(),
                                this.setActiveDay("first"));
                            break;
                        case 35:
                            this.isOnFocus &&
                                (e.preventDefault(), this.setActiveDay("last"));
                            break;
                        case 27:
                            this.isOnFocus &&
                                null !== this.input.offsetParent &&
                                this.setFocusToInput();
                            break;
                        case 34:
                            this.isOnFocus &&
                                (e.preventDefault(),
                                this.moveMonthFromKeyboard("next"));
                            break;
                        case 33:
                            this.isOnFocus &&
                                (e.preventDefault(),
                                this.moveMonthFromKeyboard("prev"));
                            break;
                        case 13:
                            this.isOnFocus &&
                                (e.preventDefault(), this.handleReturn());
                    }
                }
                setActiveDay(t) {
                    var n = document.activeElement;
                    if (
                        n &&
                        this.hasClass(
                            n,
                            "datepicker__month-day--visibleMonth"
                        ) &&
                        this.datepicker.contains(n)
                    ) {
                        var i = parseInt(n.getAttribute("index"), 10),
                            s = parseInt(n.getAttribute("d"), 10);
                        let e = -1;
                        switch (t) {
                            case "next":
                                e = i + 1;
                                break;
                            case "prev":
                                e = i - 1;
                                break;
                            case "up":
                                e = i - 7;
                                break;
                            case "down":
                                e = i + 7;
                                break;
                            case "first":
                                if (1 === s) return !1;
                                e = i - (s - 1);
                                break;
                            case "last":
                                if (7 === s) return !1;
                                e = i + (7 - s);
                        }
                        n = this.datepicker.querySelectorAll(
                            '[index="' + e + '"]'
                        );
                        if (0 < n.length && 0 < e) this.setDayFocus(n[0]);
                        else if (0 < e) {
                            let e = "";
                            if (this.goToNextMonth(2, !0)) {
                                n = this.datepicker.getElementsByClassName(
                                    "datepicker__month--month2"
                                );
                                if (0 < n.length) {
                                    if ("down" === t)
                                        e = n[0].querySelectorAll(
                                            '.datepicker__month-day--visibleMonth[d="' +
                                                s +
                                                '"]'
                                        );
                                    else if ("last" === t) {
                                        const t = s + (7 - s);
                                        e = n[0].querySelectorAll(
                                            '.datepicker__month-day--visibleMonth[d="' +
                                                t +
                                                '"]'
                                        );
                                    } else
                                        e = n[0].querySelectorAll(
                                            ".datepicker__month-day--visibleMonth"
                                        );
                                    0 < e.length && this.setDayFocus(e[0]);
                                }
                            }
                        } else if (e <= 0) {
                            let e = "";
                            if (this.goToPreviousMonth(1, !0)) {
                                n = this.datepicker.getElementsByClassName(
                                    "datepicker__month--month1"
                                );
                                if (0 < n.length) {
                                    if ("up" === t)
                                        e = n[0].querySelectorAll(
                                            '.datepicker__month-day--visibleMonth[d="' +
                                                s +
                                                '"]'
                                        );
                                    else if ("first" === t) {
                                        const t = s - (s - 1);
                                        e = n[0].querySelectorAll(
                                            '.datepicker__month-day--visibleMonth[d="' +
                                                t +
                                                '"]'
                                        );
                                    } else
                                        e = n[0].querySelectorAll(
                                            ".datepicker__month-day--visibleMonth"
                                        );
                                    0 < e.length &&
                                        this.setDayFocus(e[e.length - 1]);
                                }
                            }
                        }
                    } else this.setInitialActiveDay();
                }
                setInitialActiveDay() {
                    var e = this.datepicker.getElementsByClassName(
                        "datepicker__month-day--today"
                    );
                    return 0 < e.length ||
                        0 <
                            (e = this.datepicker.getElementsByClassName(
                                "datepicker__month-day--first-day-selected"
                            )).length
                        ? (this.setDayFocus(e[0]), e[0])
                        : 0 <
                          (e = this.datepicker.getElementsByClassName(
                              "datepicker__month-day--visibleMonth"
                          )).length
                        ? (this.setDayFocus(e[0]), e[0])
                        : void 0;
                }
                setDayFocus(e) {
                    var t = this.datepicker.getElementsByTagName("td");
                    this.removeDaysTabIndex(t),
                        e.setAttribute("tabindex", "0"),
                        e.focus(),
                        this.start && !this.end && this.dayHovering(e);
                }
                removeDaysTabIndex(t) {
                    for (let e = 0; e < t.length; e++)
                        t[e].removeAttribute("tabindex");
                }
                setDayIndexes() {
                    var t = this.datepicker.getElementsByTagName("td");
                    this.dayIndex = 1;
                    for (let e = 0; e < t.length; e++)
                        this.hasClass(
                            t[e],
                            "datepicker__month-day--visibleMonth"
                        )
                            ? (t[e].setAttribute("index", this.dayIndex),
                              this.dayIndex++)
                            : t[e].setAttribute("index", 0);
                }
                setFocusToInput() {
                    this.input.focus(),
                        this.closeDatepicker(),
                        this.clearHovering(),
                        (this.justEsc = !0),
                        (this.isOnFocus = !1);
                }
                moveMonthFromKeyboard(e) {
                    "prev" === e
                        ? this.goToPreviousMonth(1, !0)
                        : this.goToNextMonth(2, !0);
                }
                handleReturn() {
                    var e = document.activeElement;
                    e &&
                        this.datepicker.contains(e) &&
                        (this.hasClass(
                            e,
                            "datepicker__month-day--visibleMonth"
                        ) ||
                            this.hasClass(e, "datepicker__month-button") ||
                            this.hasClass(e, "datepicker__close-button") ||
                            this.hasClass(e, "datepicker__clear-button") ||
                            this.hasClass(e, "datepicker__submit-button")) &&
                        e.click();
                }
                open() {
                    this.openDatepicker();
                }
                close() {
                    this.closeDatepicker();
                }
                getDatePicker() {
                    return this.datepicker;
                }
                setRange(e, t) {
                    "string" == typeof e &&
                        "string" == typeof t &&
                        ((e = this.parseDate(e)), (t = this.parseDate(t))),
                        this.setDateRange(e, t);
                }
                clear() {
                    this.clearSelection();
                }
                getNights() {
                    let e = 0;
                    var t, n;
                    return (
                        this.start && this.end
                            ? (e = this.countDays(this.end, this.start) - 1)
                            : (t = (t = this.getValue())
                                  ? t.split(this.separator)
                                  : "") &&
                              2 <= t.length &&
                              ((n = this.format),
                              (e =
                                  this.countDays(
                                      this.parseDate(t[0], n),
                                      this.parseDate(t[1], n)
                                  ) - 1)),
                        e
                    );
                }
                destroy() {
                    document.getElementById(this.getDatepickerId()) &&
                        (this.removeAllBoundedListeners(this.input, "click"),
                        this.removeAllBoundedListeners(document, "click"),
                        this.removeAllBoundedListeners(this.input, "change"),
                        this.datepicker.parentNode.removeChild(
                            this.datepicker
                        ));
                }
            }
            return s;
        })(fecha)),

        ("use strict");
var theme = {
            init: function () {
                theme.bgImage(),
                    theme.bgImageMobile(),
                    theme.scrollTop(),
                    theme.headerSticked(),
                    theme.navbarNav(),
                    theme.changeAvatar(),
                    theme.countdown(),
                    theme.scrollCue(),
                    theme.dSelect(),
                    theme.selectGuest(),
                    theme.hotelDatePicker(),
                    theme.datePicker(),
                    theme.tinySlider(),
                    theme.plyrPlayer(),
                    theme.gLightbox(),
                    theme.bsValidation(),
                    theme.highlight(),
                    theme.codeSnippet(),
                    theme.preloader();
            },
 hotelDatePicker() {
    document.querySelectorAll(".check-date").forEach((e) => {
        let t = new Date(),
            o = t.toString();
        t.setDate(t.getDate() + 1);
        let i = t.toString();
        (e.value = o.slice(4, 15) + " - " + i.slice(4, 15)),
            new HotelDatepicker(e, { format: "MMM DD YYYY" });
    });
},
datePicker() {
    let e = document.querySelector(".date-of-birth");
    e &&
        new flatpickr(e, {
            allowInput: !1,
            minDate: "today",
            static: !0,
            position: "right center",
            wrap: !0,
            disableMobile: "true",
            dateFormat: "M d Y",
        });
    let t = document.querySelector(".departure-date");
    if (t) {
        let o = new Date();
        new flatpickr(t, {
            defaultDate: o.toString(),
            allowInput: !1,
            minDate: "today",
            static: !0,
            position: "right center",
            wrap: !0,
            disableMobile: "true",
            dateFormat: "M d Y",
        });
    }
},
};
theme.init();