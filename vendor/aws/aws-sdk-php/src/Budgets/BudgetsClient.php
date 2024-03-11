<?php
namespace Aws\Budgets;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Budgets** service.
 * @method Result createBudget(array $args = [])
 * @method Promise createBudgetAsync(array $args = [])
 * @method Result createBudgetAction(array $args = [])
 * @method Promise createBudgetActionAsync(array $args = [])
 * @method Result createNotification(array $args = [])
 * @method Promise createNotificationAsync(array $args = [])
 * @method Result createSubscriber(array $args = [])
 * @method Promise createSubscriberAsync(array $args = [])
 * @method Result deleteBudget(array $args = [])
 * @method Promise deleteBudgetAsync(array $args = [])
 * @method Result deleteBudgetAction(array $args = [])
 * @method Promise deleteBudgetActionAsync(array $args = [])
 * @method Result deleteNotification(array $args = [])
 * @method Promise deleteNotificationAsync(array $args = [])
 * @method Result deleteSubscriber(array $args = [])
 * @method Promise deleteSubscriberAsync(array $args = [])
 * @method Result describeBudget(array $args = [])
 * @method Promise describeBudgetAsync(array $args = [])
 * @method Result describeBudgetAction(array $args = [])
 * @method Promise describeBudgetActionAsync(array $args = [])
 * @method Result describeBudgetActionHistories(array $args = [])
 * @method Promise describeBudgetActionHistoriesAsync(array $args = [])
 * @method Result describeBudgetActionsForAccount(array $args = [])
 * @method Promise describeBudgetActionsForAccountAsync(array $args = [])
 * @method Result describeBudgetActionsForBudget(array $args = [])
 * @method Promise describeBudgetActionsForBudgetAsync(array $args = [])
 * @method Result describeBudgetNotificationsForAccount(array $args = [])
 * @method Promise describeBudgetNotificationsForAccountAsync(array $args = [])
 * @method Result describeBudgetPerformanceHistory(array $args = [])
 * @method Promise describeBudgetPerformanceHistoryAsync(array $args = [])
 * @method Result describeBudgets(array $args = [])
 * @method Promise describeBudgetsAsync(array $args = [])
 * @method Result describeNotificationsForBudget(array $args = [])
 * @method Promise describeNotificationsForBudgetAsync(array $args = [])
 * @method Result describeSubscribersForNotification(array $args = [])
 * @method Promise describeSubscribersForNotificationAsync(array $args = [])
 * @method Result executeBudgetAction(array $args = [])
 * @method Promise executeBudgetActionAsync(array $args = [])
 * @method Result updateBudget(array $args = [])
 * @method Promise updateBudgetAsync(array $args = [])
 * @method Result updateBudgetAction(array $args = [])
 * @method Promise updateBudgetActionAsync(array $args = [])
 * @method Result updateNotification(array $args = [])
 * @method Promise updateNotificationAsync(array $args = [])
 * @method Result updateSubscriber(array $args = [])
 * @method Promise updateSubscriberAsync(array $args = [])
 */
class BudgetsClient extends AwsClient {}
