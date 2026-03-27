# TopFlame Logic Wiring Map

## Current Wiring-Oriented Services
- `App\Services\Admin\AdminDashboardStatsService`
- `App\Services\Admin\AdminServerModerationService`
- `App\Services\Packages\PackageInstallerService`
- `App\Services\Packages\PackageRegistryService`
- `App\Services\Packages\UploadedPackagePreviewService`
- `App\Services\Settings\SettingsRepository`
- `App\Services\Premium\PremiumService`
- `App\Services\Servers\ServerSubmissionService`
- `App\Services\Servers\ServerUpdateFlowService`
- `App\Services\Votes\VoteCooldownService`
- `App\Services\Votes\VoteGatewayService`
- `App\Services\Notifications\NotificationCenter`
- `App\Services\Notifications\NotificationWriter`
- `App\Services\Installer\InstallerStateService`

## Action Controllers Present
- `Frontend\ServerActionController`
- `Frontend\VoteActionController`

## Still Needs Final Wiring
- route integration into active route files
- real form actions in Blade views
- auth real flow integration
- installer execution logic
- package upload execution logic
- admin data rendering from live services
