using CKUT.Core.Models.Sample;
using CKUT.Core.Services.Sample;
using CKUT.Web.Controllers;
using FluentAssertions;
using NSubstitute;
using NUnit.Framework;

namespace CKUT.UnitTests
{
    public class SampleTests
    {
        private ICalculatorService _calculatorService;
        private RoundCalculator _roundCalculator;
        private SampleController _sampleController;

        [SetUp]
        public void Setup()
        {
            _calculatorService = Substitute.For<ICalculatorService>();
            _sampleController = new SampleController(_calculatorService);
            _roundCalculator = new RoundCalculator();
        }

        [Test]
        public void Should_Calculate_Correct_Result_When_Input_Number()
        {
            var inputDetail = new InputDetail()
            {
                InputNumber = 1.5m
            };

            var result = _roundCalculator.Calculate(inputDetail);

            result.Should().Be(2);
        }

        [Test]
        public void Should_Call_Calculate_Method_When_Calling_API()
        {
            var result = _sampleController.GetResult("1.5", "1");
            result.GetType().Should().Be(typeof(decimal));
        }
    }
}