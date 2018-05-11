<?php 
use Patterns\Creational\AbstractFactory\Example_01\HtmlFactory;
use Patterns\Creational\AbstractFactory\Example_01\JsonFactory;
use Patterns\Creational\AbstractFactory\Example_01\HtmlText;
use Patterns\Creational\AbstractFactory\Example_01\JsonText;
use \PHPUnit\Framework\TestCase;

class Abstract_Factory_Example_01_Test extends TestCase 
{
    /** @test */
    public function can_create_html_text_object()
    {
        $htmlContent = "<b>Bold</b>";

        $htmlFactory = new HtmlFactory;
        $htmlText = $htmlFactory->createText($htmlContent);

        $this->assertInstanceOf(HtmlText::class, $htmlText);
    }

    /** @test */
    public function can_create_json_text_object()
    {
        $jsonContent = '{"student":{"first_name":"Calvin", "last_name":"Kihoro"}}';

        $jsonFactory = new JsonFactory;
        $jsonText = $jsonFactory->createText($jsonContent);

        $this->assertInstanceOf(JsonText::class, $jsonText);
    }

    /** @test */
    public function can_get_html_content()
    {
        $htmlContent = "<i>emphasized</i>";
        
        $htmlFactory = new HtmlFactory;
        $htmlText = $htmlFactory->createText($htmlContent);

        $this->assertEquals($htmlText->getContent(), $htmlContent);
    }

    /** @test */
    public function can_get_json_content()
    {
        $jsonContent = '{"client":{"name":"John", "citizenship":"Tanzania"}}';

        $jsonFactory = new JsonFactory;
        $jsonText = $jsonFactory->createText($jsonContent);

        $this->assertEquals($jsonText->getContent(), $jsonContent);
    }

    /** @test */
    public function contain_valid_json()
    {
        $content = ['book'=> ['title' => 'Design Patterns', 'author' => 'Calvin']];
        
        $jsonFactory = new JsonFactory;
        $json = $jsonFactory->createText($content);

        $jsonContent = json_encode($content);

        $this->assertJsonStringEqualsJsonString($json->toJson(), $jsonContent);
    }

}