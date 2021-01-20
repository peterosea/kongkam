<div id="calendar" class="fc fc-ltr fc-unthemed">
  <div class="fc-toolbar toolbar">
    <!-- <div class="fc-left">
      <div class="fc-button-group">
        <button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button>
        <button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button>
      </div>
      <button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="disabled">today</button>
    </div> -->
    <div class="fc-right">
      <!-- <div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div> -->
      <ul class="roomStatus">
        <li class="status status-checkin">
          <span>입실</span>
        </li>
        <li class="status status-reserve">
          <span>예약완료</span>
        </li>
        <li class="status status-hold">
          <span>예약대기</span>
        </li>
      </ul>
    </div>
    <div class="fc-center">
      <!-- HTML 커스텀 start -->
      <button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left">
        <i class="fas fa-chevron-left"></i>
      </button>
      <h2>12월 2020년</h2>
      <button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right">
        <i class="fas fa-chevron-right"></i>
      </button>
      <!-- HTML 커스텀 end -->
    </div>
    <div class="fc-clear"></div>
  </div>
  <div class="fc-view-container" style="">
    <div class="fc-view fc-month-view fc-basic-view" style="">
      <table>
        <thead>
          <tr>
            <td class="fc-widget-header">
              <div class="fc-row fc-widget-header">
                <table>
                  <thead>
                    <tr>
                      <th class="fc-day-header fc-widget-header fc-sun">일</th>
                      <th class="fc-day-header fc-widget-header fc-mon">월</th>
                      <th class="fc-day-header fc-widget-header fc-tue">화</th>
                      <th class="fc-day-header fc-widget-header fc-wed">수</th>
                      <th class="fc-day-header fc-widget-header fc-thu">목</th>
                      <th class="fc-day-header fc-widget-header fc-fri">금</th>
                      <th class="fc-day-header fc-widget-header fc-sat">토</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="fc-widget-content">
              <div class="fc-day-grid-container" style="">
                <div class="fc-day-grid">
                  <div class="fc-row fc-week fc-widget-content" style="height: 150px;">
                    <div class="fc-bg">
                      <table>
                        <tbody>
                          <tr>
                            <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2020-11-29"></td>
                            <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2020-11-30"></td>
                            <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2020-12-01"></td>
                            <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2020-12-02"></td>
                            <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2020-12-03"></td>
                            <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2020-12-04"></td>
                            <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2020-12-05"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="fc-content-skeleton">
                      <table>
                        <thead>
                          <tr>
                            <td class="fc-day-number fc-sun fc-other-month fc-past" data-date="2020-11-29">29</td>
                            <td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2020-11-30">30</td>
                            <td class="fc-day-number fc-tue fc-past" data-date="2020-12-01">1</td>
                            <td class="fc-day-number fc-wed fc-past" data-date="2020-12-02">2</td>
                            <td class="fc-day-number fc-thu fc-past" data-date="2020-12-03">3</td>
                            <td class="fc-day-number fc-fri fc-past" data-date="2020-12-04">4</td>
                            <td class="fc-day-number fc-sat fc-past" data-date="2020-12-05">5</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td class="fc-event-container"><a class="status status-checkin fc-day-grid-event fc-event fc-start fc-end label-important fc-draggable">
                                <div class="fc-content">
                                  <!-- <span class="fc-time">12a</span> -->
                                  <span class="fc-roomnumber">101호</span><span>&nbsp;/&nbsp;</span><span class="fc-title">정아인 외1</span>
                                </div>
                              </a></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="fc-row fc-week fc-widget-content" style="height: 150px;">
                    <div class="fc-bg">
                      <table>
                        <tbody>
                          <tr>
                            <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2020-12-06"></td>
                            <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2020-12-07"></td>
                            <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2020-12-08"></td>
                            <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2020-12-09"></td>
                            <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2020-12-10"></td>
                            <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2020-12-11"></td>
                            <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2020-12-12"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="fc-content-skeleton">
                      <table>
                        <thead>
                          <tr>
                            <td class="fc-day-number fc-sun fc-past" data-date="2020-12-06">6</td>
                            <td class="fc-day-number fc-mon fc-past" data-date="2020-12-07">7</td>
                            <td class="fc-day-number fc-tue fc-past" data-date="2020-12-08">8</td>
                            <td class="fc-day-number fc-wed fc-past" data-date="2020-12-09">9</td>
                            <td class="fc-day-number fc-thu fc-past" data-date="2020-12-10">10</td>
                            <td class="fc-day-number fc-fri fc-past" data-date="2020-12-11">11</td>
                            <td class="fc-day-number fc-sat fc-past" data-date="2020-12-12">12</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="fc-row fc-week fc-widget-content" style="height: 150px;">
                    <div class="fc-bg">
                      <table>
                        <tbody>
                          <tr>
                            <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2020-12-13"></td>
                            <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2020-12-14"></td>
                            <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2020-12-15"></td>
                            <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2020-12-16"></td>
                            <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2020-12-17"></td>
                            <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2020-12-18"></td>
                            <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2020-12-19"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="fc-content-skeleton">
                      <table>
                        <thead>
                          <tr>
                            <td class="fc-day-number fc-sun fc-past" data-date="2020-12-13">13</td>
                            <td class="fc-day-number fc-mon fc-past" data-date="2020-12-14">14</td>
                            <td class="fc-day-number fc-tue fc-past" data-date="2020-12-15">15</td>
                            <td class="fc-day-number fc-wed fc-past" data-date="2020-12-16">16</td>
                            <td class="fc-day-number fc-thu fc-past" data-date="2020-12-17">17</td>
                            <td class="fc-day-number fc-fri fc-past" data-date="2020-12-18">18</td>
                            <td class="fc-day-number fc-sat fc-past" data-date="2020-12-19">19</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td rowspan="2"></td>
                            <td rowspan="2"></td>
                            <td rowspan="2"></td>
                            <td rowspan="2"></td>
                            <td class="fc-event-container" colspan="3"><a class="status status-reserve fc-day-grid-event fc-event fc-start fc-not-end label-success fc-draggable">
                                <div class="fc-content">
                                  <span class="fc-roomnumber">101호</span><span>&nbsp;/&nbsp;</span><span class="fc-title">김희철 외1</span>
                                </div>
                              </a></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td class="fc-event-container"><a class="status status-hold fc-day-grid-event fc-event fc-start fc-end label-info fc-draggable">
                                <div class="fc-content">
                                  <!-- <span class="fc-time">4p</span> -->
                                  <span class="fc-roomnumber">102호</span><span>&nbsp;/&nbsp;</span><span class="fc-title">최민희 외1</span>
                                </div>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="fc-row fc-week fc-widget-content" style="height: 150px;">
                    <div class="fc-bg">
                      <table>
                        <tbody>
                          <tr>
                            <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2020-12-20"></td>
                            <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2020-12-21"></td>
                            <td class="fc-day fc-widget-content fc-tue fc-today fc-state-highlight" data-date="2020-12-22"></td>
                            <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2020-12-23"></td>
                            <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2020-12-24"></td>
                            <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2020-12-25"></td>
                            <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2020-12-26"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="fc-content-skeleton">
                      <table>
                        <thead>
                          <tr>
                            <td class="fc-day-number fc-sun fc-past" data-date="2020-12-20">20</td>
                            <td class="fc-day-number fc-mon fc-past" data-date="2020-12-21">21</td>
                            <td class="fc-day-number fc-tue fc-today fc-state-highlight" data-date="2020-12-22">22</td>
                            <td class="fc-day-number fc-wed fc-future" data-date="2020-12-23">23</td>
                            <td class="fc-day-number fc-thu fc-future" data-date="2020-12-24">24</td>
                            <td class="fc-day-number fc-fri fc-future" data-date="2020-12-25">25</td>
                            <td class="fc-day-number fc-sat fc-future" data-date="2020-12-26">26</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="fc-event-container"><a class="status status-reserve fc-day-grid-event fc-event fc-not-start fc-end label-success fc-draggable fc-resizable">
                                <div class="fc-content">
                                  <span class="fc-roomnumber">101호</span><span>&nbsp;/&nbsp;</span><span class="fc-title">김희철 외1</span>
                                </div>
                                <div class="fc-resizer"></div>
                              </a></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="fc-row fc-week fc-widget-content" style="height: 150px;">
                    <div class="fc-bg">
                      <table>
                        <tbody>
                          <tr>
                            <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2020-12-27"></td>
                            <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2020-12-28"></td>
                            <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2020-12-29"></td>
                            <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2020-12-30"></td>
                            <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2020-12-31"></td>
                            <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2021-01-01"></td>
                            <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2021-01-02"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="fc-content-skeleton">
                      <table>
                        <thead>
                          <tr>
                            <td class="fc-day-number fc-sun fc-future" data-date="2020-12-27">27</td>
                            <td class="fc-day-number fc-mon fc-future" data-date="2020-12-28">28</td>
                            <td class="fc-day-number fc-tue fc-future" data-date="2020-12-29">29</td>
                            <td class="fc-day-number fc-wed fc-future" data-date="2020-12-30">30</td>
                            <td class="fc-day-number fc-thu fc-future" data-date="2020-12-31">31</td>
                            <td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2021-01-01">1</td>
                            <td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2021-01-02">2</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="fc-row fc-week fc-widget-content" style="height: 154px;">
                    <div class="fc-bg">
                      <table>
                        <tbody>
                          <tr>
                            <td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2021-01-03"></td>
                            <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2021-01-04"></td>
                            <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2021-01-05"></td>
                            <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2021-01-06"></td>
                            <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2021-01-07"></td>
                            <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2021-01-08"></td>
                            <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2021-01-09"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="fc-content-skeleton">
                      <table>
                        <thead>
                          <tr>
                            <td class="fc-day-number fc-sun fc-other-month fc-future" data-date="2021-01-03">3</td>
                            <td class="fc-day-number fc-mon fc-other-month fc-future" data-date="2021-01-04">4</td>
                            <td class="fc-day-number fc-tue fc-other-month fc-future" data-date="2021-01-05">5</td>
                            <td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2021-01-06">6</td>
                            <td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2021-01-07">7</td>
                            <td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2021-01-08">8</td>
                            <td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2021-01-09">9</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>