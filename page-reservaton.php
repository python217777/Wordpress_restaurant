<?php

	/*
	Template Name: FrontPage
	*/

	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();

?>
  <style>
      * {
        box-sizing: border-box;
      }

      body {
        margin: 0;
        padding: 20px;
        background-color: #85c343;
        font-family: "Hiragino Kaku Gothic ProN", "メイリオ", "Helvetica Neue",
          Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
      }

      .reservation-widget {
        width: 100%;
        max-width: 400px;
        background: white;
        border-radius: 16px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        overflow: visible;
        position: relative;
      }

      .widget-header {
        background: #85c343;
        color: #ffffff;
        padding: 20px;
        text-align: center;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 0.5px;
      }

      .widget-body {
        padding: 24px;
      }

      .form-group {
        margin-bottom: 20px;
        position: relative;
      }

      .form-label {
        display: block;
        margin-bottom: 8px;
        font-size: 14px;
        font-weight: 500;
        color: #333;
      }

      .form-select,
      .form-input {
        width: 100%;
        height: 48px;
        border: 2px solid #e1e5e9;
        border-radius: 12px;
        padding: 0 16px;
        font-size: 16px;
        background: white;
        transition: all 0.3s ease;
        appearance: none;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23666' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6,9 12,15 18,9'%3e%3c/polyline%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 16px center;
        background-size: 16px;
      }

      .form-select:focus,
      .form-input:focus {
        outline: none;
        border-color: #85c343;
        box-shadow: 0 0 0 4px rgba(133, 195, 67, 0.1);
      }

      .date-picker {
        position: relative;
        cursor: pointer;
      }

      .date-picker.disabled {
        opacity: 0.5;
        cursor: not-allowed;
      }

      .calendar-icon {
        position: absolute;
        right: 16px;
        top: 50%;
        transform: translateY(-50%);
        width: 20px;
        height: 20px;
        color: #666;
        pointer-events: none;
      }

      .calendar {
        position: fixed;
        left: 50%;
        transform: translateX(-50%);
        top: 20%;
        background: white;
        border: 2px solid #e1e5e9;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        z-index: 1001;
        display: none;
        min-width: 300px;
        max-width: 92vw;
      }

      .calendar.show {
        display: block !important;
        visibility: visible;
        opacity: 1;
      }

      .calendar-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 16px;
        border-bottom: 1px solid #e1e5e9;
      }

      .calendar-nav {
        background: none;
        border: none;
        font-size: 18px;
        color: #85c343;
        cursor: pointer;
        padding: 8px;
        border-radius: 8px;
        transition: background-color 0.2s;
      }

      .calendar-nav:hover {
        background-color: #f0f7e8;
      }

      .calendar-nav:disabled {
        color: #ccc;
        cursor: not-allowed;
      }

      .calendar-title {
        font-size: 16px;
        font-weight: 600;
        color: #333;
      }

      .calendar-body {
        padding: 16px;
      }

      .calendar-weekdays {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 4px;
        margin-bottom: 8px;
      }

      .calendar-weekday {
        text-align: center;
        font-size: 12px;
        font-weight: 600;
        color: #666;
        padding: 8px 0;
      }

      .calendar-days {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 4px;
      }

      .calendar-day {
        aspect-ratio: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        cursor: pointer;
        font-size: 14px;
        transition: all 0.2s;
        border: 2px solid transparent;
      }

      .calendar-day:hover {
        background-color: #f0f7e8;
        color: #85c343;
      }

      .calendar-day.selected {
        background-color: #85c343;
        color: white;
      }

      .calendar-day.disabled {
        color: #ccc;
        cursor: not-allowed;
      }

      .calendar-day.other-month {
        color: #ccc;
      }

      .submit-button {
        width: 100%;
        height: 52px;
        background: linear-gradient(135deg, #85c343 0%, #6ba832 100%);
        color: white;
        border: none;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 8px;
      }

      .submit-button:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(133, 195, 67, 0.3);
      }

      .submit-button:disabled {
        background: #ccc;
        cursor: not-allowed;
        transform: none;
        box-shadow: none;
      }

      .widget-footer {
        text-align: center;
        padding: 16px;
        font-size: 12px;
        color: #666;
        opacity: 0.8;
      }

      .overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 999;
        display: none;
      }

      .overlay.show {
        display: block;
      }

      @media (max-width: 480px) {
        body {
          padding: 10px;
        }

        .reservation-widget {
          max-width: 100%;
        }

        .widget-body {
          padding: 20px;
        }
      }
    </style>
  
  <body>
    <div class="reservation-widget">
      <div class="widget-header">ウェブ予約</div>

      <div class="widget-body">
        <!-- Store Selection -->
        <div class="form-group">
          <label class="form-label">店舗</label>
          <select class="form-select" id="storeSelect">
            <option value="">店舗を選択してください</option>
            <option value="sun-buffet">森のビュッフェ SUN</option>
          </select>
        </div>

        <!-- Party Size -->
        <div class="form-group">
          <label class="form-label">人数</label>
          <select class="form-select" id="partySize" disabled>
            <option value="">人数を選択してください</option>
          </select>
        </div>

        <!-- Date Selection -->
        <div class="form-group">
          <label class="form-label">お日にち</label>
          <div class="date-picker" id="datePicker">
            <input
              type="text"
              class="form-input"
              id="dateInput"
              placeholder="日付を選択してください"
              readonly
            />
            <svg
              class="calendar-icon"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
            >
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
          </div>
        </div>

        <!-- Calendar -->
        <div class="calendar" id="calendar">
          <div class="calendar-header">
            <button class="calendar-nav" id="prevMonth">‹</button>
            <div class="calendar-title" id="calendarTitle"></div>
            <button class="calendar-nav" id="nextMonth">›</button>
          </div>
          <div class="calendar-body">
            <div class="calendar-weekdays">
              <div class="calendar-weekday">日</div>
              <div class="calendar-weekday">月</div>
              <div class="calendar-weekday">火</div>
              <div class="calendar-weekday">水</div>
              <div class="calendar-weekday">木</div>
              <div class="calendar-weekday">金</div>
              <div class="calendar-weekday">土</div>
            </div>
            <div class="calendar-days" id="calendarDays"></div>
          </div>
        </div>

        <!-- Submit Button -->
        <button class="submit-button" id="submitButton" disabled>次へ</button>
      </div>

      <div class="widget-footer">powered by Toreta</div>
    </div>

    <div class="overlay" id="overlay"></div>

    <script>
      class ReservationWidget {
        constructor() {
          this.currentDate = new Date();
          this.selectedDate = null;
          this.selectedStore = null;
          this.selectedPartySize = null;
          this.reservableDays = 60; // From original code: reservableDays:60

          this.initializeElements();
          this.bindEvents();
          this.updatePartySizeOptions();
        }

        initializeElements() {
          this.storeSelect = document.getElementById("storeSelect");
          this.partySizeSelect = document.getElementById("partySize");
          this.dateInput = document.getElementById("dateInput");
          this.datePicker = document.getElementById("datePicker");
          this.calendar = document.getElementById("calendar");
          this.calendarTitle = document.getElementById("calendarTitle");
          this.calendarDays = document.getElementById("calendarDays");
          this.prevMonth = document.getElementById("prevMonth");
          this.nextMonth = document.getElementById("nextMonth");
          this.submitButton = document.getElementById("submitButton");
          this.overlay = document.getElementById("overlay");
        }

        bindEvents() {
          this.storeSelect.addEventListener("change", () =>
            this.onStoreChange()
          );
          this.partySizeSelect.addEventListener("change", () =>
            this.onPartySizeChange()
          );
          this.datePicker.addEventListener("click", () =>
            this.toggleCalendar()
          );
          this.prevMonth.addEventListener("click", () => this.changeMonth(-1));
          this.nextMonth.addEventListener("click", () => this.changeMonth(1));
          this.overlay.addEventListener("click", () => this.hideCalendar());
          this.submitButton.addEventListener("click", () =>
            this.submitReservation()
          );
        }

        onStoreChange() {
          this.selectedStore = this.storeSelect.value;
          if (this.selectedStore) {
            this.partySizeSelect.disabled = false;
            this.datePicker.classList.remove("disabled");
            this.updatePartySizeOptions();
          } else {
            this.partySizeSelect.disabled = true;
            this.datePicker.classList.add("disabled");
            this.partySizeSelect.innerHTML =
              '<option value="">人数を選択してください</option>';
            this.hideCalendar();
          }
          this.updateSubmitButton();
        }

        onPartySizeChange() {
          this.selectedPartySize = this.partySizeSelect.value;
          this.updateSubmitButton();
        }

        updatePartySizeOptions() {
          if (this.selectedStore) {
            const options = [
              "1名様",
              "2名様",
              "3名様",
              "4名様",
              "5名様",
              "6名様",
            ];
            this.partySizeSelect.innerHTML =
              '<option value="">人数を選択してください</option>';
            options.forEach((option, index) => {
              const optionElement = document.createElement("option");
              optionElement.value = index + 1;
              optionElement.textContent = option;
              this.partySizeSelect.appendChild(optionElement);
            });
          }
        }

        toggleCalendar() {
          console.log("Calendar toggle clicked");
          if (this.datePicker.classList.contains("disabled")) {
            console.log("Date picker is disabled");
            return;
          }

          if (this.calendar.classList.contains("show")) {
            console.log("Hiding calendar");
            this.hideCalendar();
          } else {
            console.log("Showing calendar");
            this.showCalendar();
          }
        }

        showCalendar() {
          this.calendar.classList.add("show");
          this.overlay.classList.add("show");
          this.renderCalendar();
          // Position calendar near the input, but keep within viewport
          const rect = this.datePicker.getBoundingClientRect();
          const viewportHeight =
            window.innerHeight || document.documentElement.clientHeight;
          const preferredTop = rect.bottom + 8;
          const approxHeight = 380;
          const finalTop =
            preferredTop + approxHeight > viewportHeight
              ? Math.max(16, rect.top - approxHeight - 8)
              : preferredTop;
          this.calendar.style.top = finalTop + "px";
        }

        hideCalendar() {
          this.calendar.classList.remove("show");
          this.overlay.classList.remove("show");
        }

        changeMonth(direction) {
          this.currentDate.setMonth(this.currentDate.getMonth() + direction);
          // Ensure we don't go beyond reservable days
          const maxDate = new Date();
          maxDate.setDate(maxDate.getDate() + this.reservableDays);
          if (this.currentDate > maxDate) {
            this.currentDate = maxDate;
          }
          this.renderCalendar();
        }

        renderCalendar() {
          const year = this.currentDate.getFullYear();
          const month = this.currentDate.getMonth();

          this.calendarTitle.textContent = `${year}年${month + 1}月`;

          const firstDay = new Date(year, month, 1);
          const lastDay = new Date(year, month + 1, 0);
          const startDate = new Date(firstDay);
          startDate.setDate(startDate.getDate() - firstDay.getDay());

          this.calendarDays.innerHTML = "";

          for (let i = 0; i < 42; i++) {
            const date = new Date(startDate);
            date.setDate(startDate.getDate() + i);

            const dayElement = document.createElement("div");
            dayElement.className = "calendar-day";
            dayElement.textContent = date.getDate();

            if (date.getMonth() !== month) {
              dayElement.classList.add("other-month");
            }

            const today = new Date();
            today.setHours(0, 0, 0, 0);
            const maxDate = new Date(today);
            maxDate.setDate(today.getDate() + this.reservableDays);

            if (date < today || date > maxDate) {
              dayElement.classList.add("disabled");
            } else {
              dayElement.addEventListener("click", () => this.selectDate(date));
            }

            if (this.selectedDate && this.isSameDate(date, this.selectedDate)) {
              dayElement.classList.add("selected");
            }

            this.calendarDays.appendChild(dayElement);
          }
        }

        selectDate(date) {
          this.selectedDate = date;
          this.dateInput.value = this.formatDate(date);
          this.hideCalendar();
          this.updateSubmitButton();
        }

        isSameDate(date1, date2) {
          return (
            date1.getFullYear() === date2.getFullYear() &&
            date1.getMonth() === date2.getMonth() &&
            date1.getDate() === date2.getDate()
          );
        }

        formatDate(date) {
          return `${date.getFullYear()}年${
            date.getMonth() + 1
          }月${date.getDate()}日`;
        }

        formatDateForURL(date) {
          const year = date.getFullYear();
          const month = String(date.getMonth() + 1).padStart(2, "0");
          const day = String(date.getDate()).padStart(2, "0");
          return `${year}-${month}-${day}`;
        }

        updateSubmitButton() {
          const canSubmit =
            this.selectedStore && this.selectedPartySize && this.selectedDate;
          this.submitButton.disabled = !canSubmit;
        }

        submitReservation() {
          if (this.submitButton.disabled) return;

          const storeId = this.selectedStore;
          const partySize = this.selectedPartySize;
          const date = this.formatDateForURL(this.selectedDate);

          // Construct the Toreta reservation URL
          const reservationUrl = `https://yoyaku.toreta.in/${encodeURIComponent(
            storeId
          )}?date=${encodeURIComponent(date)}&seats=${encodeURIComponent(
            partySize
          )}`;

          // Redirect to the Toreta reservation page
          window.location.href = reservationUrl;
        }
      }

      // Initialize the widget when the page loads
      document.addEventListener("DOMContentLoaded", () => {
        new ReservationWidget();
      });
    </script>
  </body>

<?php get_footer(); ?>
