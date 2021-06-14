using CKUT.Core.Services.Ch8._8._2._2;
using NUnit.Framework;

namespace CKUT.UnitTests.Ch8._8._2._2
{
    [TestFixture]
    public class LogAnalyzerInitTest
    {
        [Test]
        public void IsValid_LengthBiggerThen8_IsFalse()
        {
            var logan = new LogAnalyzerInit();
            logan.Initialize();
            var valid = logan.IsValid("123456789");
            Assert.IsFalse(valid);
        }

        [Test]
        public void IsValid_LengthSmallerThen8_IsTrue()
        {
            var logan = new LogAnalyzerInit();
            logan.Initialize();
            var valid = logan.IsValid("1234567");
            Assert.IsTrue(valid);
        }
    }
}