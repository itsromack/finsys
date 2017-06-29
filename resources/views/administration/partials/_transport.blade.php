@if(!is_null($details))
    <table class="view-data-table general-quote-table">
        <tbody>
            <tr>
                <td>
                    <label>Do you hold a current transport operators Insurance policy?: </label>
                </td>
                <td>
                    @if ($details['is_current_insurance_policy_holder'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    <h3 class="sub-title-table">Motor Cover</h3>
    <table class="view-data-table general-quote-table">
        <tbody>
            <tr>
                <td>
                    <label>Insured Name: </label>
                </td>
                <td>
                    {{ $details['insured_name'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Radius of operations: </label>
                </td>
                <td>
                    {{ $details['radius_operations'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Are there any under 25 or over 80 year old drivers?: </label>
                </td>
                <td>
                    @if ($details['is_within_allowed_age'])
                        <span class="label label-success">Yes</span>
                    @elseif ($details['is_current_insurance_policy_holder'] == 0)
                        <span class="label label-danger">No</span>
                    @else
                        <span class="label label-warning">Unknown</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Are there any drivers with less than 2 years experience in the required class of license (HR, MR, MC etc)?: </label>
                </td>
                <td>
                    @if ($details['is_small_experience'])
                        <span class="label label-success">Yes</span>
                    @elseif ($details['is_current_insurance_policy_holder'] == 0)
                        <span class="label label-danger">No</span>
                    @else
                        <span class="label label-warning">Unknown</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Schedule of the motor fleet: </label>
                </td>
                <td>
                    <a href="{{ route('download_fleet_schedule', ['file' => $details['file_motor_fleet_schedule']]) }}" class="btn btn-xs btn-success"><i class="fa fa-download" aria-hidden="true"></i> Download Fleet Schedule</a>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Non Owned trailer in control cover required? (Prime Movers only): </label>
                </td>
                <td>
                    @if ($details['is_prime_mover'])
                        <span class="label label-success">Yes</span>
                    @elseif ($details['is_current_insurance_policy_holder'] == 0)
                        <span class="label label-danger">No</span>
                    @else
                        <span class="label label-warning">Unknown</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Down time cover on Prime Mover/s required?: </label>
                </td>
                <td>
                    @if ($details['is_prime_mover_down_time_cover'])
                        <span class="label label-success">Yes</span>
                    @elseif ($details['is_current_insurance_policy_holder'] == 0)
                        <span class="label label-danger">No</span>
                    @else
                        <span class="label label-warning">Unknown</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Excess Free windscreen cover required?: </label>
                </td>
                <td>
                    @if ($details['is_excess_free_windscreen_cover'])
                        <span class="label label-success">Yes</span>
                    @elseif ($details['is_current_insurance_policy_holder'] == 0)
                        <span class="label label-danger">No</span>
                    @else
                        <span class="label label-warning">Unknown</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Are vehicles dry hired?: </label>
                </td>
                <td>
                    @if ($details['is_vehicles_dry_hired'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    <h3 class="sub-title-table">Public &amp; Product Liability Cover</h3>
    <table class="view-data-table general-quote-table">
        <tbody>
            <tr>
                <td>
                    <label>Do you require public &amp; product liability insurance?: </label>
                </td>
                <td>
                    @if ($details['is_require_liability_insurance'])
                        <span class="label label-success">Yes</span>
                    @elseif ($details['is_current_insurance_policy_holder'] == 0)
                        <span class="label label-danger">No</span>
                    @else
                        <span class="label label-warning">Unknown</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>What is your estimated annual Turnover?: </label>
                </td>
                <td>
                    {{ $details['estimated_annual_turnover'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Limit of Indemnity Required?: </label>
                </td>
                <td>
                    {{ $details['indemnity_limit'] }}
                </td>
            </tr>
        </tbody>
    </table>
    <h3 class="sub-title-table">Workers Compensation Cover</h3>
    <table class="view-data-table general-quote-table">
        <tbody>
            <tr>
                <td>
                    <label>Do you engage Sub-Contractors?: </label>
                </td>
                <td>
                    @if ($details['has_contractors'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Do you require workers compensation insurance?: </label>
                </td>
                <td>
                    @if ($details['is_require_worker_compensation_insurance'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Estimated Wages Payable (12 months)?: </label>
                </td>
                <td>
                    {{ $details['estimated_annual_wages'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Estimated number of employees?: </label>
                </td>
                <td>
                    {{ $details['estimated_employee_population'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Do you require marine transit cover?: </label>
                </td>
                <td>
                    @if ($details['is_require_marine_transit_insurance'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Amount of cover required for goods in transit any one trip?: </label>
                </td>
                <td>
                    {{ $details['amount_of_cover'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Do you store any of the goods in a warehouse?: </label>
                </td>
                <td>
                    @if ($details['is_goods_stored_warehouse'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    <h3 class="sub-title-table">In the last 5 years have you or any other person likely to drive these vehicles:</h3>
    <table class="view-data-table general-quote-table">
        <tbody>
            <tr>
                <td>
                    <label>Had a claim, accident or car stolen or burnt?: </label>
                </td>
                <td>
                    @if ($details['has_claim_accident_stolen_burnt?'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Had insurance refused, declined or cancelled by an insurer or any special conditions imposed?: </label>
                </td>
                <td>
                    @if ($details['has_incomplete_insurance'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Had a drivers or motorcycle licence cancelled, suspended or endorsed?: </label>
                </td>
                <td>
                    @if ($details['has_license_cancelled'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Been convicted or charged with drug use, driving under the influence, or exceeding prescribed concentration of alcohol?: </label>
                </td>
                <td>
                    @if ($details['has_convicted_under_influence'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Been convicted or charged with any driving offences or speeding infringements (other than parking offences?: </label>
                </td>
                <td>
                    @if ($details['has_convicted_driving_offenses'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Been convicted with fraud, arson, theft or any other criminal act?: </label>
                </td>
                <td>
                    @if ($details['has_convicted_fraud'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Discount Code: </label>
                </td>
                <td>
                    {{ $details['discount_code'] }}
                </td>
            </tr>
        </tbody>
    </table>
@else
    <h2 style="text-align: center;">Data not available!</h2>
@endif