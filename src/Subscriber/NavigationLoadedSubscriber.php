<?php declare(strict_types=1);

namespace RuneLaenen\CategoryLinks\Subscriber;

use Shopware\Core\Content\Category\Event\NavigationLoadedEvent;
use Shopware\Core\Content\Category\Tree\TreeItem;
use Shopware\Core\Content\Seo\SeoUrlPlaceholderHandlerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class NavigationLoadedSubscriber implements EventSubscriberInterface
{
    private SeoUrlPlaceholderHandlerInterface $handler;

    public function __construct(
        SeoUrlPlaceholderHandlerInterface $handler
    ) {
        $this->handler = $handler;
    }

    public static function getSubscribedEvents()
    {
        return [
            NavigationLoadedEvent::class => 'onNavigationLoaded',
        ];
    }

    public function onNavigationLoaded(NavigationLoadedEvent $event)
    {
        $navigation = $event->getNavigation();

        $this->handleTree($navigation->getTree());

        return $navigation;
    }

    private function handleTree(array $tree)
    {
        /** @var TreeItem $treeItem */
        foreach ($tree as $treeItem) {
            $category = $treeItem->getCategory();
            $customFields = $category->getTranslated()['customFields'] ?? [];
            if (array_key_exists('rl_cl_isCategoryLink', $customFields) && $customFields['rl_cl_isCategoryLink'] === '1') {
                $categoryId = $customFields['rl_cl_categoryId'];
                $url = $this->handler->generate('frontend.navigation.page', ['navigationId' => $categoryId]);
                $category->setTranslated(array_merge(
                    $category->getTranslated(),
                    [
                        'externalLink' => $url,
                    ]
                ));
            }

            $this->handleTree($treeItem->getChildren());
        }
    }
}
