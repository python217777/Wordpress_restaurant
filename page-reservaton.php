<?php
	/*
	Template Name: FrontPage
	*/

	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();
?>
<div class="m-0 p-5 bg-[#85c343] font-['Hiragino_Kaku_Gothic_ProN','メイリオ','Helvetica_Neue',Arial,sans-serif] flex justify-center items-center min-h-screen">
    <div class="reservation-widget w-full max-w-[400px] bg-white rounded-2xl shadow-[0_20px_40px_rgba(0,0,0,0.15)] overflow-visible relative">
      <div class="widget-header bg-[#85c343] text-white py-5 px-6 text-center text-lg font-semibold tracking-[0.5px]">
        ウェブ予約
      </div>

      <div class="widget-body p-6">
        <!-- Store Selection -->
        <div class="form-group mb-5 relative">
          <label class="form-label block mb-2 text-sm font-medium text-[#333]">
            店舗
          </label>
          <select class="form-select w-full h-12 border-2 border-[#e1e5e9] rounded-xl px-4 text-base bg-white transition-all duration-300 appearance-none bg-[url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'%23666\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'%3e%3cpolyline points=\'6,9 12,15 18,9\'%3e%3c/polyline%3e%3c/svg%3e')] bg-no-repeat bg-[right_16px_center] bg-[length:16px] focus:outline-none focus:border-[#85c343] focus:ring-4 focus:ring-[#85c343]/10" id="storeSelect">
            <option value="">店舗を選択してください</option>
            <option value="sun-buffet">森のビュッフェ SUN</option>
          </select>
        </div>

        <!-- Party Size -->
        <div class="form-group mb-5 relative">
          <label class="form-label block mb-2 text-sm font-medium text-[#333]">
            人数
          </label>
          <select class="form-select w-full h-12 border-2 border-[#e1e5e9] rounded-xl px-4 text-base bg-white transition-all duration-300 appearance-none bg-[url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'%23666\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'%3e%3cpolyline points=\'6,9 12,15 18,9\'%3e%3c/polyline%3e%3c/svg%3e')] bg-no-repeat bg-[right_16px_center] bg-[length:16px] focus:outline-none focus:border-[#85c343] focus:ring-4 focus:ring-[#85c343]/10" id="partySize" disabled>
            <option value="">人数を選択してください</option>
          </select>
        </div>

        <!-- Date Selection -->
        <div class="form-group mb-5 relative">
          <label class="form-label block mb-2 text-sm font-medium text-[#333]">
            お日にち
          </label>
          <div class="date-picker relative cursor-pointer" id="datePicker">
            <input
              type="text"
              class="form-input w-full h-12 border-2 border-[#e1e5e9] rounded-xl px-4 text-base bg-white transition-all duration-300 focus:outline-none focus:border-[#85c343] focus:ring-4 focus:ring-[#85c343]/10"
              id="dateInput"
              placeholder="日付を選択してください"
              readonly
            />
            <svg
              class="calendar-icon absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-[#666] pointer-events-none"
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
        <div class="calendar fixed left-1/2 -translate-x-1/2 top-[20%] bg-white border-2 border-[#e1e5e9] rounded-xl shadow-[0_10px_30px_rgba(0,0,0,0.15)] z-[1001] hidden min-w-[300px] max-w-[92vw]" id="calendar">
          <div class="calendar-header flex justify-between items-center p-4 border-b border-[#e1e5e9]">
            <button class="calendar-nav bg-transparent border-none text-lg text-[#85c343] cursor-pointer p-2 rounded-lg hover:bg-[#f0f7e8] transition-colors duration-200 disabled:text-[#ccc] disabled:cursor-not-allowed" id="prevMonth">‹</button>
            <div class="calendar-title text-base font-semibold text-[#333]" id="calendarTitle"></div>
            <button class="calendar-nav bg-transparent border-none text-lg text-[#85c343] cursor-pointer p-2 rounded-lg hover:bg-[#f0f7e8] transition-colors duration-200 disabled:text-[#ccc] disabled:cursor-not-allowed" id="nextMonth">›</button>
          </div>
          <div class="calendar-body p-4">
            <div class="calendar-weekdays grid grid-cols-7 gap-1 mb-2">
              <div class="calendar-weekday text-center text-xs font-semibold text-[#666] py-2">日</div>
              <div class="calendar-weekday text-center text-xs font-semibold text-[#666] py-2">月</div>
              <div class="calendar-weekday text-center text-xs font-semibold text-[#666] py-2">火</div>
              <div class="calendar-weekday text-center text-xs font-semibold text-[#666] py-2">水</div>
              <div class="calendar-weekday text-center text-xs font-semibold text-[#666] py-2">木</div>
              <div class="calendar-weekday text-center text-xs font-semibold text-[#666] py-2">金</div>
              <div class="calendar-weekday text-center text-xs font-semibold text-[#666] py-2">土</div>
            </div>
            <div class="calendar-days grid grid-cols-7 gap-1" id="calendarDays"></div>
          </div>
        </div>

        <!-- Submit Button -->
        <button class="submit-button w-full h-[52px] bg-gradient-to-br from-[#85c343] to-[#6ba832] text-white border-none rounded-xl text-base font-semibold cursor-pointer transition-all duration-300 mt-2 hover:-translate-y-[2px] hover:shadow-[0_8px_20px_rgba(133,195,67,0.3)] disabled:bg-[#ccc] disabled:cursor-not-allowed disabled:hover:translate-y-0 disabled:hover:shadow-none" id="submitButton" disabled>次へ</button>
      </div>

      <div class="widget-footer text-center p-4 text-xs text-[#666] opacity-80">
        powered by Toreta
      </div>
    </div>

    <div class="overlay fixed inset-0 bg-black/50 z-[999] hidden" id="overlay"></div>

    <script>
      class ReservationWidget {
        constructor() {
          this.currentDate = new Date();
          this.selectedDate = null;
          this.selectedStore = null;
          this.selectedPartySize = null;
          this.reservableDays = 60;

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
          this.storeSelect.addEventListener("change", () => this.onStoreChange());
          this.partySizeSelect.addEventListener("change", () => this.onPartySizeChange());
          this.datePicker.addEventListener("click", () => this.toggleCalendar());
          this.prevMonth.addEventListener("click", () => this.changeMonth(-1));
          this.nextMonth.addEventListener("click", () => this.changeMonth(1));
          this.overlay.addEventListener("click", () => this.hideCalendar());
          this.submitButton.addEventListener("click", () => this.submitReservation());
        }

        onStoreChange() {
          this.selectedStore = this.storeSelect.value;
          if (this.selectedStore) {
            this.partySizeSelect.disabled = false;
            this.datePicker.classList.remove("opacity-50", "cursor-not-allowed");
            this.updatePartySizeOptions();
          } else {
            this.partySizeSelect.disabled = true;
            this.datePicker.classList.add("opacity-50", "cursor-not-allowed");
            this.partySizeSelect.innerHTML = '<option value="">人数を選択してください</option>';
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
            const options = ["1名様", "2名様", "3名様", "4名様", "5名様", "6名様"];
            this.partySizeSelect.innerHTML = '<option value="">人数を選択してください</option>';
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
          if (this.datePicker.classList.contains("opacity-50")) {
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
          this.calendar.classList.add("show", "!block", "visible", "opacity-100");
          this.overlay.classList.add("show", "block");
          this.renderCalendar();
          const rect = this.datePicker.getBoundingClientRect();
          const viewportHeight = window.innerHeight || document.documentElement.clientHeight;
          const preferredTop = rect.bottom + 8;
          const approxHeight = 380;
          const finalTop = preferredTop + approxHeight > viewportHeight ? Math.max(16, rect.top - approxHeight - 8) : preferredTop;
          this.calendar.style.top = finalTop + "px";
        }

        hideCalendar() {
          this.calendar.classList.remove("show", "!block", "visible", "opacity-100");
          this.overlay.classList.remove("show", "block");
        }

        changeMonth(direction) {
          this.currentDate.setMonth(this.currentDate.getMonth() + direction);
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
            dayElement.className = "calendar-day aspect-square flex items-center justify-center rounded-lg cursor-pointer text-sm transition-all duration-200 border-2 border-transparent hover:bg-[#f0f7e8] hover:text-[#85c343]";
            dayElement.textContent = date.getDate();

            if (date.getMonth() !== month) {
              dayElement.classList.add("text-[#ccc]");
            }

            const today = new Date();
            today.setHours(0, 0, 0, 0);
            const maxDate = new Date(today);
            maxDate.setDate(today.getDate() + this.reservableDays);

            if (date < today || date > maxDate) {
              dayElement.classList.add("text-[#ccc]", "cursor-not-allowed");
            } else {
              dayElement.addEventListener("click", () => this.selectDate(date));
            }

            if (this.selectedDate && this.isSameDate(date, this.selectedDate)) {
              dayElement.classList.add("bg-[#85c343]", "text-white");
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
          return `${date.getFullYear()}年${date.getMonth() + 1}月${date.getDate()}日`;
        }

        formatDateForURL(date) {
          const year = date.getFullYear();
          const month = String(date.getMonth() + 1).padStart(2, "0");
          const day = String(date.getDate()).padStart(2, "0");
          return `${year}-${month}-${day}`;
        }

        updateSubmitButton() {
          const canSubmit = this.selectedStore && this.selectedPartySize && this.selectedDate;
          this.submitButton.disabled = !canSubmit;
        }

        submitReservation() {
          if (this.submitButton.disabled) return;

          const storeId = this.selectedStore;
          const partySize = this.selectedPartySize;
          const date = this.formatDateForURL(this.selectedDate);

          const reservationUrl = `https://yoyaku.toreta.in/${encodeURIComponent(storeId)}?date=${encodeURIComponent(date)}&seats=${encodeURIComponent(partySize)}`;

          window.location.href = reservationUrl;
        }
      }

      document.addEventListener("DOMContentLoaded", () => {
        new ReservationWidget();
      });
    </script>
</div>

<?php get_footer(); ?>