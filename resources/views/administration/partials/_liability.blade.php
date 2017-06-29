@if(!is_null($details))
    <table class="view-data-table general-quote-table">
        <tbody>
            <tr>
                <td>
                    <label>Do you hold a current Public or Product Liability Insurance policy?: </label>
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
                    <label>Estimated annual Turnover: </label>
                </td>
                <td>
                    {{ $details['estimated_annual_turnover'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Estimated Wages Payable (12 months): </label>
                </td>
                <td>
                    {{ $details['estimated_annual_wages'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Is engage contractors or sub-contractors?: </label>
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
                    <label>Limit of indemnity do you require?: </label>
                </td>
                <td>
                    {{ $details['indemnity_limit'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Have you had any claims made against you (whether insured or not) or have you recalled any of your products during the last 5 years?: </label>
                </td>
                <td>
                    @if ($details['has_claims_in_last_five_years'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Have you had any incident or accident occur which would have been covered by the proposed insurance policy?: </label>
                </td>
                <td>
                    @if ($details['has_incident_covered_by_policy'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Have you had any insurance declined or cancelled, proposal rejected, renewal refused, claim rejected, special conditions or special excess imposed by an insurer?: </label>
                </td>
                <td>
                    @if ($details['has_incomplete_insurance'])
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