@if(!is_null($details))
    <table class="view-data-table general-quote-table">
        <tbody>
            <tr>
                <td>
                    <label>Is current Workers Compensation Insurance policy holder?: </label>
                </td>
                <td>
                    @if ($details['is_current_insurance_policy_holder'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Description of business activities: </label>
                </td>
                <td>
                    <p>{{ $details['business_activities'] }}</p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Total Estimated wages payable over the next 12 months: </label>
                </td>
                <td>
                    <p>{{ $details['estimated_annual_wages'] }}</p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Estimated number of employees: </label>
                </td>
                <td>
                    <p>{{ $details['estimated_employee_population'] }}</p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Is cover required for working directors?: </label>
                </td>
                <td>
                    @if ($details['has_working_directors'])
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
                    <label>Are Contractors or Sub-Contractors used?: </label>
                </td>
                <td>
                    @if ($details['has_contractors'])
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
                    <label>Are part time or casual workers employed?: </label>
                </td>
                <td>
                    @if ($details['has_casual_workers'])
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
                    <label>Is there a formal OHS plan in place?: </label>
                </td>
                <td>
                    @if ($details['has_formal_ohs_plan'])
                        <span class="label label-success">Yes</span>
                    @elseif ($details['is_current_insurance_policy_holder'] == 0)
                        <span class="label label-danger">No</span>
                    @else
                        <span class="label label-info">Not Applicable</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Have you had any insurance declined or cancelled, proposal rejected, renewal refused, claim rejected, special conditions or special excess imposed by an insurer?</label>
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
                    <label>Have you had any Workers Compensation claims in the last 5 years?: </label>
                </td>
                <td>
                    @if ($details['has_claims_in_last_five_years'])
                        <span class="label label-success">Yes</span>
                    @elseif ($details['is_current_insurance_policy_holder'] == 0)
                        <span class="label label-danger">No</span>
                    @else
                        <span class="label label-info">Not Applicable - New business venture</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Is your business a New Venture?</label>
                </td>
                <td>
                    @if ($details['is_new_business_venture'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
@else
    <h2 style="text-align: center;">Data not available!</h2>
@endif